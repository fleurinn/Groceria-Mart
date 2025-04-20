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
        $sort = $request->input('sort');
        $tag = $request->input('tag');

        $allTags = Product::pluck('tags')
            ->flatMap(function ($tagString) {
                return collect(explode(',', $tagString));
            })
            ->map(function ($tag) {
                return trim($tag);
            })
            ->unique()
            ->filter()
            ->values();

        $products = Product::with('category', 'variants')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%")
                      ->orWhere('tags', 'like', "%$search%");
                });
            })
            ->when($category, fn ($q) => $q->where('category_product_id', $category))
            ->when($status, fn ($q) => $q->where('status', $status))
            ->when($tag, fn ($q) => $q->where('tags', 'like', "%$tag%"))
            ->when($sort, function ($query) use ($sort) {
                match ($sort) {
                    '3' => $query->orderBy('name', 'asc'),
                    '4' => $query->orderBy('name', 'desc'),
                    '5' => $query->orderBy('price', 'asc'),
                    '6' => $query->orderBy('price', 'desc'),
                    default => null
                };
            })
            ->paginate(10);

        return view('admin.pages.products.produk.index', compact('products', 'search', 'category', 'status', 'sort', 'tag', 'allTags'));
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
            'description' => 'nullable|string|max:500',
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
        ],
    
        [
            'name.required' => 'Kolom nama wajib diisi.', // Pesan khusus untuk validasi name
            'status.required' => 'Kolom status wajib diisi.', // Contoh untuk field lain
            'image' => 'Kolom gambar wajib diisi.', // Contoh untuk field lain
            'price' => 'Kolom harga wajib diisi.', // Contoh untuk field lain
            'stock' => 'Kolom stok wajib diisi.', // Contoh untuk field lain
            'category_product_id' => 'Kolom kategori wajib diisi.', // Contoh untuk field lain

        ]);

        $cekNama = Product::where('name', $request->name)->exists();
        if ($cekNama) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Nama ini sudah digunakan, silakan gunakan nama lain.');
        };

        try {
            // Simpan gambar utama dengan move()
            $imageName = $request->file('image')->hashName();
            $request->file('image')->move(public_path('storage/products'), $imageName);

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
                        $variant['image']->move(public_path('storage/variants'), $variantImage);
                    }

                    $variantPrice = $variant['price'] ?? 0;
                    $variantDiscount = $variant['discount'] ?? 0;
                    $discountedVariantPrice = $variantPrice - ($variantPrice * ($variantDiscount / 100));

                    $product->variants()->create([
                        'name' => $variant['name'] ?? null,
                        'description' => $variant['description'] ?? null,
                        'price' => $discountedVariantPrice,
                        'discount' => $variantDiscount,
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
        $variants = $product->variants;
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
        ],
    
        [
            'name.required' => 'Kolom nama wajib diisi.', // Pesan khusus untuk validasi name
            'status.required' => 'Kolom status wajib diisi.', // Contoh untuk field lain
            'image' => 'Kolom gambar wajib diisi.', // Contoh untuk field lain
            'price' => 'Kolom harga wajib diisi.', // Contoh untuk field lain
            'stock' => 'Kolom stok wajib diisi.', // Contoh untuk field lain
            'category_product_id' => 'Kolom kategori wajib diisi.', // Contoh untuk field lain

        ]);

        try {
            if ($request->hasFile('image')) {
                Storage::delete('public/products/' . $product->image);
                $imageName = $request->file('image')->hashName();
                $request->file('image')->move(public_path('storage/products'), $imageName);
                $product->image = $imageName;
            }

            $originalPrice = $request->price;
            $discountPercent = $request->discount ?? 0;
            $discountedPrice = $originalPrice - ($originalPrice * ($discountPercent / 100));

            $product->update([
                'name' => $request->name,
                'weight' => $request->weight,
                'dimension' => $request->dimension,
                'color' => $request->color,
                'description' => $request->description,
                'category_product_id' => $request->category_product_id,
                'image' => $product->image,
                'price' => $discountedPrice,
                'stock' => $request->stock,
                'status' => $request->status,
                'tags' => $request->tags,
                'discount' => $discountPercent,
            ]);

            if ($request->has('variants')) {
                foreach ($request->variants as $variant) {
                    $data = [
                        'name' => $variant['name'] ?? null,
                        'description' => $variant['description'] ?? null,
                        'stock' => $variant['stock'] ?? null,
                        'discount' => $variant['discount'] ?? 0,
                    ];

                    $variantPrice = $variant['price'] ?? 0;
                    $variantDiscount = $variant['discount'] ?? 0;
                    $data['price'] = $variantPrice - ($variantPrice * ($variantDiscount / 100));

                    if (isset($variant['image'])) {
                        $existing = $product->variants()->find($variant['id'] ?? null);
                        if ($existing && $existing->image) {
                            Storage::delete('public/variants/' . $existing->image);
                        }

                        $variantImageName = $variant['image']->hashName();
                        $variant['image']->move(public_path('storage/variants'), $variantImageName);
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
            if ($product->image) {
                Storage::delete('public/products/' . $product->image);
            }
        }

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
            return response()->json(['success' => true, 'message' => 'Produk berhasil didrafkan.']);
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
