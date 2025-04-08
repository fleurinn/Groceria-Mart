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

        // Pencarian berdasarkan nama kategori
        if  ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('status') && in_array($request->status, ['publish', 'draft'])) {
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
            'status'      => 'required|in:publish,draft',
        ]);

        $imagePath = $request->file('image')->store('categoryproducts', 'public');

        CategoryProduct::create([
            'name'        => $request->name,
            // 'slug'        => Str::slug($request->name),
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
            'status'      => 'required|in:publish,draft',
        ]);

        $data = [
            'name'        => $request->name,
            // 'slug'        => Str::slug($request->name),
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

    //Bulk
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada kategori produk yang dipilih.'], 400);
        }

        $categories = CategoryProduct::whereIn('id', $ids)->get();

        foreach ($categories as $category) {
            if ($category->image) {
                Storage::delete('public/category_products/' . $category->image);
            }
        }

        CategoryProduct::whereIn('id', $ids)->delete();

        return response()->json(['success' => true, 'message' => 'Kategori produk berhasil dihapus.']);
    }

    public function bulkDraft(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            CategoryProduct::whereIn('id', $ids)->update(['status' => 'draft']);
            return response()->json(['success' => true, 'message' => 'Kategori produk berhasil diubah ke draft.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada kategori produk yang dipilih.'], 400);
    }

    public function bulkPublish(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            CategoryProduct::whereIn('id', $ids)->update(['status' => 'publik']);
            return response()->json(['success' => true, 'message' => 'Kategori produk berhasil dipublikasikan.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada kategori produk yang dipilih.'], 400);
    }

}

