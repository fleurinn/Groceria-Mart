<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CategoryProduct;
use App\Models\VariantProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // Menampilkan daftar produk
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

    // Menampilkan halaman tambah produk
    public function create()
    {
        $categories = CategoryProduct::all();
        return view('admin.pages.products.produk.create', compact('categories'));
    }

    // Menyimpan produk baru beserta variannya
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'weight'            => 'nullable|string|max:50',
            'dimension'         => 'nullable|string|max:100',
            'color'             => 'nullable|string|max:50',
            'slug'              => 'nullable|string|unique:products,slug|max:255',
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

        // Menyimpan data produk
        $slug = $request->input('slug') ?: Str::slug($request->name);
        $imagePath = $request->file('image')->storeAs('public/products', $request->file('image')->hashName());

        $product = Product::create($request->except(['image', 'slug', 'variants']) + [
            'image' => $request->file('image')->hashName(),
            'slug' => $slug,
        ]);

        // Menyimpan data varian jika ada
        if ($request->has('variants')) {
            foreach ($request->variants as $variant) {
                $variantImageName = null;
                if (isset($variant['image'])) {
                    $variantImageName = $variant['image']->hashName();
                    $variant['image']->storeAs('public/variants', $variantImageName);
                }

                $product->variants()->create(array_merge($variant, ['image' => $variantImageName]));
            }
        }

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan halaman edit produk
    public function edit(Product $product)
    {
        $categories = CategoryProduct::all();
        return view('admin.pages.products.produk.edit', compact('product', 'categories'));
    }

    // Mengupdate produk dan variannya
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'weight'            => 'nullable|string|max:50',
            'dimension'         => 'nullable|string|max:100',
            'color'             => 'nullable|string|max:50',
            'slug'              => 'nullable|string|max:255|unique:products,slug,' . $product->id,
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

        $slug = $request->input('slug') ?: Str::slug($request->name);

        if ($request->hasFile('image')) {
            Storage::delete('public/products/' . $product->image);
            $imagePath = $request->file('image')->storeAs('public/products', $request->file('image')->hashName());
            $product->image = $request->file('image')->hashName();
        }

        $product->update($request->except(['image', 'slug', 'variants']) + ['slug' => $slug]);

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
                    $variant['image']->storeAs('public/variants', $variant['image']->hashName());
                    $variantData['image'] = $variant['image']->hashName();
                }

                $product->variants()->updateOrCreate(['id' => $variant['id'] ?? null], $variantData);
            }
        }

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus produk beserta variannya
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
}
