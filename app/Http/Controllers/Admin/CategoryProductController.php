<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryProductController extends Controller
{
    public function index(Request $request)
    {
        $query = CategoryProduct::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('status') && in_array($request->status, ['Aktif', 'Non-Aktif'])) {
            $query->where('status', $request->status);
        }

        $categoryproducts = $query->paginate(10);
        return view('admin.pages.products.kategori-produk.index', compact('categoryproducts'));
    }

    public function create()
    {
        return view('admin.pages.products.kategori-produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:category_products,name',
            'image'       => 'required|image|mimes:jpeg,jpg,png',
            'description' => 'nullable|string',
            'status'      => 'required|in:Aktif,Non-Aktif',
        ]);

        $imagePath = $request->file('image')->store('categoryproducts', 'public');

        CategoryProduct::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'image'       => $imagePath,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        return redirect()->route('category-products.index')->with('success', 'Kategori produk berhasil ditambahkan.');
    }

    public function edit(CategoryProduct $categoryproduct)
    {
        return view('admin.pages.products.kategori-produk.edit', compact('categoryproduct'));
    }

    public function update(Request $request, CategoryProduct $categoryproduct)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:category_products,name,' . $categoryproduct->id,
            'image'       => 'nullable|image|mimes:jpeg,jpg,png',
            'description' => 'nullable|string',
            'status'      => 'required|in:Aktif,Non-Aktif',
        ]);

        $data = [
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'status'      => $request->status,
        ];

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($categoryproduct->image) {
                Storage::disk('public')->delete($categoryproduct->image);
            }

            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('categoryproducts', 'public');
        }

        $updateBerhasil = $categoryproduct->update($data);

        return redirect()->route('category-products.index')->with(
            $updateBerhasil ? 'success' : 'error',
            $updateBerhasil ? 'Kategori produk berhasil diperbarui.' : 'Gagal memperbarui kategori.'
        );
    }


    public function destroy(CategoryProduct $categoryproduct)
    {
        if ($categoryproduct->image) {
            Storage::disk('public')->delete($categoryproduct->image);
        }

        $categoryproduct->delete();
        return redirect()->route('category-products.index')->with('success', 'Kategori produk berhasil dihapus.');
    }
}
