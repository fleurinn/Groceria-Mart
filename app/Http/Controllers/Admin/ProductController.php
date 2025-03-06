<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    // Menampilkan form untuk membuat produk baru
    public function create()
    {
        $categories = CategoryProduct::all();
        return view('admin.products.create', compact('categories'));
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'              => 'required|string|max:255',
            'description'       => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image'             => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock'             => 'required|integer|min:0',
            'status'            => 'required|in:draft,publik',
        ]);

        // Upload image
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/products/', $image->hashName());

        // Menyimpan produk
        Product::create([
            'name'              => $request->name,
            'description'       => $request->description,
            'category_product_id' => $request->category_product_id,
            'image'             => $image->hashName(),
            'price'             => $request->price,
            'stock'             => $request->stock,
            'status'            => $request->status,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit produk
    public function edit(Product $product)
    {
        $categories = CategoryProduct::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    // Mengupdate produk
    public function update(Request $request, Product $product)
    {
        // Validasi input
        $request->validate([
            'name'              => 'required|string|max:255',
            'description'       => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image'             => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock'             => 'required|integer|min:0',
            'status'            => 'required|in:draft,publik',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image && Storage::exists('public/products/' . $product->image)) {
                Storage::delete('public/products/' . $product->image);
            }

            // Upload gambar baru
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/products/', $image->hashName());

            $product->update([
                'name'              => $request->name,
                'description'       => $request->description,
                'category_product_id' => $request->category_product_id,
                'image'             => $image->hashName(),
                'price'             => $request->price,
                'stock'             => $request->stock,
                'status'            => $request->status,
            ]);
        } else {
            // Update produk tanpa mengubah gambar
            $product->update([
                'name'              => $request->name,
                'description'       => $request->description,
                'category_product_id' => $request->category_product_id,
                'price'             => $request->price,
                'stock'             => $request->stock,
                'status'            => $request->status,
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus produk
    public function destroy(Product $product)
    {
        // Hapus gambar terkait jika ada
        if ($product->image && Storage::exists('public/products/' . $product->image)) {
            Storage::delete('public/products/' . $product->image);
        }

        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }

    // Menampilkan detail produk
    public function show(string $id): View
    {
        $product = Product::with('category')->findOrFail($id);
        return view('admin.products.show', compact('product'));
    }
}
