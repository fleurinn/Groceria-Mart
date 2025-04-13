<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CategoryProduct;
use App\Models\VariantProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
        $status = $request->input('status');

        $products = Product::with('category', 'variants')
            ->when($search, fn ($q) => $q->where('name', 'like', "%$search%")
                ->orWhere('tags', 'like', "%$search%"))
            ->when($category, fn ($q) => $q->where('category_product_id', $category))
            ->when($status, fn ($q) => $q->where('status', $status))
            ->paginate(10);

        return view('admin.pages.products.produk.index', compact('products', 'search'));
    }

    public function create()
    {
        $categories = CategoryProduct::all();
        return view('admin.pages.products.produk.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'weight' => 'nullable|string|max:50',
            'dimension' => 'nullable|string|max:100',
            'color' => 'nullable|string|max:50',
            'description' => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'status' => 'required|in:draft,publish',
            'tags' => 'nullable|string',
            'discount' => 'nullable|numeric|min:0|max:100',
            'variants.*.name' => 'nullable|string|max:255',
            'variants.*.image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'variants.*.description' => 'nullable|string|max:1000',
            'variants.*.price' => 'nullable|numeric|min:0',
            'variants.*.discount' => 'nullable|numeric|min:0|max:100',
            'variants.*.stock' => 'nullable|integer|min:0',
        ]);

        try {
            $imageName = $request->file('image')->hashName();
            $request->file('image')->storeAs('public/products', $imageName);


            $product = Product::create([
                'name' => $request->name,
                'weight' => $request->weight,
                'dimension' => $request->dimension,
                'color' => $request->color,
                'description' => $request->description,
                'category_product_id' => $request->category_product_id,
                'image' => $imageName,
                'price' => $request->price,
                'stock' => $request->stock,
                'status' => $request->status,
                'tags' => $request->tags,
                'discount' => $request->discount,
            ]);

            if ($request->has('variants')) {
                foreach ($request->variants as $variant) {
                    $variantImage = null;

                    if (!empty($variant['image']) && $variant['image'] instanceof \Illuminate\Http\UploadedFile) {
                        $variantImage = $variant['image']->hashName();
                        $variant['image']->storeAs('public/variants', $variantImage);
                    }

                    $product->variants()->create([
                        'name' => $variant['name'] ?? null,
                        'description' => $variant['description'] ?? null,
                        'price' => $variant['price'] ?? null,
                        'discount' => $variant['discount'] ?? null,
                        'stock' => $variant['stock'] ?? null,
                        'image' => $variantImage,
                    ]);
                }
            }

            return redirect()->route('products.index')->with('success', 'Product berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan produk: ' . $e->getMessage());
        }
    }

    public function edit(Product $product)
    {
        $variants = $product->variants; // akan mengambil semua variant milik product
        $categories = CategoryProduct::all(); 

        return view('admin.pages.products.produk.edit', compact('product', 'variants', 'categories')); 
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'weight' => 'nullable|string|max:50',
            'dimension' => 'nullable|string|max:100',
            'color' => 'nullable|string|max:50',
            'description' => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'status' => 'required|in:draft,publish',
            'tags' => 'nullable|string',
            'discount' => 'nullable|numeric|min:0|max:100',
            'variants.*.id' => 'nullable|integer|exists:variant_products,id',
            'variants.*.name' => 'nullable|string|max:255',
            'variants.*.image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'variants.*.description' => 'nullable|string|max:1000',
            'variants.*.price' => 'nullable|numeric|min:0',
            'variants.*.discount' => 'nullable|numeric|min:0|max:100',
            'variants.*.stock' => 'nullable|integer|min:0',
        ]);

        try {
            if ($request->hasFile('image')) {
                Storage::delete('public/products/' . $product->image);
                $imageName = $request->file('image')->hashName();
                $request->file('image')->storeAs('public/products', $imageName);
                $product->image = $imageName;
            }

            $product->update($request->except(['image', 'variants']));

            if ($request->has('variants')) {
                foreach ($request->variants as $variant) {
                    $data = [
                        'name' => $variant['name'] ?? null,
                        'description' => $variant['description'] ?? null,
                        'price' => $variant['price'] ?? null,
                        'discount' => $variant['discount'] ?? null,
                        'stock' => $variant['stock'] ?? null,
                    ];

                    if (isset($variant['image'])) {
                        $existing = $product->variants()->find($variant['id'] ?? null);
                        if ($existing && $existing->image) {
                            Storage::delete('public/variants/' . $existing->image);
                        }

                        $variantImageName = $variant['image']->hashName();
                        $variant['image']->storeAs('public/variants', $variantImageName);
                        $data['image'] = $variantImageName;
                    }

                    $product->variants()->updateOrCreate(['id' => $variant['id'] ?? null], $data);
                }
            }

            return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui produk: ' . $e->getMessage());
        }
    }

    public function destroy(Product $product)
    {
        Storage::delete('public/products/' . $product->image);
        foreach ($product->variants as $variant) {
            Storage::delete('public/variants/' . $variant->image);
        }

        $product->variants()->delete();
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }

    //Bulk
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids) || !is_array($ids)) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada produk yang dipilih atau format ID salah.'
            ], 400);
        }

        $products = Product::with('variants')->whereIn('id', $ids)->get();

        foreach ($products as $product) {
            // Hapus gambar produk utama
            if ($product->image && Storage::exists('public/products/' . $product->image)) {
                Storage::delete('public/products/' . $product->image);
            }

            // Hapus gambar pada semua varian produk
            foreach ($product->variants as $variant) {
                if ($variant->image && Storage::exists('public/variants/' . $variant->image)) {
                    Storage::delete('public/variants/' . $variant->image);
                }
            }

            // Hapus relasi varian dari database
            $product->variants()->delete();
        }

        // Hapus produk dari database
        Product::whereIn('id', $ids)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil dihapus.'
        ]);
    }

    public function bulkDraft(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            Product::whereIn('id', $ids)->update(['status' => 'draft']);
            return response()->json(['success' => true, 'message' => 'Produk berhasil diubah ke draft.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada produk yang dipilih.'], 400);
    }

    public function bulkPublish(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            Product::whereIn('id', $ids)->update(['status' => 'publish']);
            return response()->json(['success' => true, 'message' => 'Produk berhasil dipublikasikan.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada produk yang dipilih.'], 400);
    }
}
