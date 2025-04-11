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

        $totalProducts = Product::count();
        $publishedProducts = Product::where('status', 'publish')->count();
        $draftProducts = Product::where('status', 'draft')->count();
        $discountedProducts = Product::whereNotNull('discount')->count();

        $products = Product::with('category', 'variants')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('tags', 'like', "%{$search}%");
            })
            ->when($category, function ($query) use ($category) {
                $query->where('category_product_id', $category);
            })
            ->when($status, function ($query) use ($status) {
                $query->where('status', $status);
            })
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
            'name'              => 'required|string|max:255',
            'weight'            => 'nullable|string|max:50',
            'dimension'         => 'nullable|string|max:100',
            'color'             => 'nullable|string|max:50',
            'description'       => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image'             => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock'             => 'required|integer|min:0',
            'status'            => 'required|in:draft,publish',
            'tags'              => 'nullable|string',
            'discount'          => 'nullable|numeric|min:0|max:100',
            'variants'          => 'nullable|array|max:10',
            'variants.*.name'   => 'required|string|max:255',
            'variants.*.image'  => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'variants.*.description' => 'required|string|max:1000',
            'variants.*.price'  => 'required|numeric|min:0',
            'variants.*.discount' => 'nullable|numeric|min:0|max:100',
            'variants.*.stock'  => 'required|integer|min:0',
        ]);

        // Simpan image utama
        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path('storage/products'), $imageName);

        // Simpan produk
        $product = Product::create($request->except(['image', 'variants']) + [
            'image' => $imageName,
        ]);

        // Simpan varian
        if ($request->has('variants')) {
            foreach ($request->variants as $variant) {
                $variantImageName = null;
                if (isset($variant['image'])) {
                    $variantImageName = $variant['image']->hashName();
                    $variant['image']->move(public_path('storage/variants'), $variantImageName);
                }

                $product->variants()->create(array_merge($variant, ['image' => $variantImageName]));
            }
        }

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }


    public function edit(Product $product)
    {
        $categories = CategoryProduct::all();
        return view('admin.pages.products.produk.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'weight'            => 'nullable|string|max:50',
            'dimension'         => 'nullable|string|max:100',
            'color'             => 'nullable|string|max:50',
            'description'       => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image'             => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock'             => 'required|integer|min:0',
            'status'            => 'required|in:draft,publish',
            'tags'              => 'nullable|string',
            'discount'          => 'nullable|numeric|min:0|max:100',
            'variants'          => 'nullable|array|max:10',
            'variants.*.name'   => 'required|string|max:255',
            'variants.*.image'  => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'variants.*.description' => 'required|string|max:1000',
            'variants.*.price'  => 'required|numeric|min:0',
            'variants.*.discount' => 'nullable|numeric|min:0|max:100',
            'variants.*.stock'  => 'required|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/products/' . $product->image);

            $imageName = $request->file('image')->hashName();
            $request->file('image')->move(public_path('storage/products'), $imageName);
            $product->image = $imageName;
        }

        $product->update($request->except(['image', 'variants']));

        if ($request->has('variants')) {
            foreach ($request->variants as $variant) {
                $variantData = [
                    'name' => $variant['name'],
                    'description' => $variant['description'],
                    'price' => $variant['price'],
                    'discount' => $variant['discount'],
                    'stock' => $variant['stock'],
                ];

                if (isset($variant['image'])) {
                    $existingVariant = $product->variants()->find($variant['id'] ?? null);
                    if ($existingVariant && $existingVariant->image) {
                        Storage::delete('public/variants/' . $existingVariant->image);
                    }
                    $variantImageName = $variant['image']->hashName();
                    $variant['image']->move(public_path('storage/variants'), $variantImageName);
                    $variantData['image'] = $variantImageName;
                }

                $product->variants()->updateOrCreate(['id' => $variant['id'] ?? null], $variantData);
            }
        }

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }


    public function destroy(Product $product)
    {
        Storage::delete('public/products/' . $product->image);
        foreach ($product->variants as $variant) {
            Storage::delete('public/variants/' . $variant->image);
        }
        $product->variants()->delete();
        $product->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
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
            Product::whereIn('id', $ids)->update(['status' => 'publik']);
            return response()->json(['success' => true, 'message' => 'Produk berhasil dipublikasikan.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada produk yang dipilih.'], 400);
    }
}
