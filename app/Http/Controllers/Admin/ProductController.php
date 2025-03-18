<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan daftar produk dengan fitur pencarian berdasarkan nama dan tag
    public function index(Request $request)
    {
        $search = $request->input('search');

        $products = Product::with('category')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('tags', 'like', "%{$search}%");
            })
            ->get();

        return view('admin.pages.products.produk.index', compact('products', 'search'));
    }

    // Menampilkan form untuk membuat produk baru
    public function create()
    {
        $categories = CategoryProduct::all();
        return view('admin.pages.products.produk.create', compact('categories'));
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'description'       => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image'             => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock'             => 'required|integer|min:0',
            'status'            => 'required|in:draft,public',
            'tags'              => 'nullable|string', // Menggunakan string, bukan array
        ]);

        $image = $request->file('image');
        $imagePath = $image->storeAs('public/products/', $image->hashName());

        Product::create([
            'name'              => $request->name,
            'description'       => $request->description,
            'category_product_id' => $request->category_product_id,
            'image'             => $image->hashName(),
            'price'             => $request->price,
            'stock'             => $request->stock,
            'status'            => $request->status,
            'tags'              => $request->tags, // Menyimpan tag langsung ke dalam kolom products
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit produk
    public function edit(Product $product)
    {
        $categories = CategoryProduct::all();
        return view('admin.pages.products.produk.edit', compact('product', 'categories'));
    }

    // Mengupdate produk
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'description'       => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image'             => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock'             => 'required|integer|min:0',
            'status'            => 'required|in:draft,public',
            'tags'              => 'nullable|string', // Menyimpan tag sebagai string
        ]);

        if ($request->hasFile('image')) {
            if ($product->image && Storage::exists('public/products/' . $product->image)) {
                Storage::delete('public/products/' . $product->image);
            }

            $image = $request->file('image');
            $imagePath = $image->storeAs('public/products/', $image->hashName());
            $product->update(['image' => $image->hashName()]);
        }

        $product->update($request->except('image'));

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }
}
