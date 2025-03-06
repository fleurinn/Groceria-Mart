<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CategoryProductController extends Controller
{
    // Menampilkan daftar kategori produk
    public function index()
    {
        $categoryproducts = CategoryProduct::all();
        return view('admin.categoryproducts.index', compact('categoryproducts'));
    }

    // Menampilkan form untuk membuat kategori produk baru
    public function create()
    {
        return view('admin.categoryproducts.create');
    }

    // Menyimpan kategori produk baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'   => 'required|string|max:255',
            'image'  => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'status' => 'required|in:draft,publik',
        ]);

        // Upload image
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/categoryproducts/', $image->hashName());

        // Menyimpan kategori
        CategoryProduct::create([
            'name'   => $request->name,
            'image'  => $image->hashName(),
            'status' => $request->status,
        ]);

        return redirect()->route('categoryproducts.index')->with('success', 'Kategori produk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit kategori produk
    public function edit(CategoryProduct $categoryproduct)
    {
        return view('admin.categoryproducts.edit', compact('categoryproduct'));
    }

    // Mengupdate kategori produk
    public function update(Request $request, CategoryProduct $categoryproduct)
    {
        // Validasi input
        $request->validate([
            'name'   => 'required|string|max:255',
            'image'  => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'status' => 'required|in:draft,publik',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($categoryproduct->image && Storage::exists('public/categoryproducts/' . $categoryproduct->image)) {
                Storage::delete('public/categoryproducts/' . $categoryproduct->image);
            }

            // Upload gambar baru
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/categoryproducts/', $image->hashName());

            $categoryproduct->update([
                'name'   => $request->name,
                'image'  => $image->hashName(),
                'status' => $request->status,
            ]);
        } else {
            // Update kategori tanpa mengubah gambar
            $categoryproduct->update([
                'name'   => $request->name,
                'status' => $request->status,
            ]);
        }

        return redirect()->route('categoryproducts.index')->with('success', 'Kategori produk berhasil diperbarui.');
    }

    // Menghapus kategori produk
    public function destroy(CategoryProduct $categoryproduct)
    {
        // Hapus gambar terkait jika ada
        if ($categoryproduct->image && Storage::exists('public/categoryproducts/' . $categoryproduct->image)) {
            Storage::delete('public/categoryproducts/' . $categoryproduct->image);
        }

        $categoryproduct->delete();
        return redirect()->route('categoryproducts.index')->with('success', 'Kategori produk berhasil dihapus.');
    }

    // Menampilkan detail kategori produk
    public function show(string $id): View
    {
        $categoryproduct = CategoryProduct::with('products')->findOrFail($id);
        return view('admin.categoryproducts.show', compact('categoryproduct'));
    }
}
