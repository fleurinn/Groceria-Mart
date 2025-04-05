<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoryProductController extends Controller
{
    // Menampilkan daftar kategori produk dengan pencarian, filter, dan pagination
    public function index(Request $request)
{
    $query = CategoryProduct::query();

    // Pencarian berdasarkan nama kategori
    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    // Filter berdasarkan status (Aktif/Non-Aktif)
    if ($request->has('status') && in_array($request->status, ['publish', 'draft'])) {
        $query->where('status', $request->status);
    }

    $categoryproducts = $query->withCount('products')->paginate(10);
    return view('admin.categoryproducts.index', compact('categoryproducts'));
}

// Simpan kategori produk baru dengan deskripsi
public function store(Request $request)
{
    $request->validate([
        'name'        => 'required|string|max:255|unique:category_products,name',
        'image'       => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'description' => 'nullable|string',
        'status'      => 'required|in:publish,draft', // Sesuai migration
    ]);

    $image = $request->file('image');
    $imagePath = $image->storeAs('public/categoryproducts/', $image->hashName());

    CategoryProduct::create([
        'name'        => $request->name,
        'slug'        => Str::slug($request->name),
        'image'       => $image->hashName(),
        'description' => $request->description,
        'status'      => $request->status,
    ]);

    return redirect()->route('categoryproducts.index')->with('success', 'Kategori produk berhasil ditambahkan.');
}

// Update kategori produk dengan deskripsi
public function update(Request $request, CategoryProduct $categoryproduct)
{
    $request->validate([
        'name'        => 'required|string|max:255|unique:category_products,name,' . $categoryproduct->id,
        'image'       => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        'description' => 'nullable|string',
        'status'      => 'required|in:publish,draft',
    ]);

    if ($request->hasFile('image')) {
        if ($categoryproduct->image && Storage::exists('public/categoryproducts/' . $categoryproduct->image)) {
            Storage::delete('public/categoryproducts/' . $categoryproduct->image);
        }
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/categoryproducts/', $image->hashName());
        $categoryproduct->image = $image->hashName();
    }

    $categoryproduct->update([
        'name'        => $request->name,
        'slug'        => Str::slug($request->name),
        'description' => $request->description,
        'status'      => $request->status,
    ]);

    return redirect()->route('categoryproducts.index')->with('success', 'Kategori produk berhasil diperbarui.');
}

 // Menghapus kategori produk
    public function destroy(CategoryProduct $categoryproduct)
    {
        if ($categoryproduct->image && Storage::exists('public/categoryproducts/' . $categoryproduct->image)) {
            Storage::delete('public/categoryproducts/' . $categoryproduct->image);
        }

        $categoryproduct->delete();
        return redirect()->route('categoryproducts.index')->with('success', 'Kategori produk berhasil dihapus.')->withNotify(true);
    }

    // Bulk Delete Kategori Produk
    public function bulkDelete(Request $request)
    {
        $request->validate(['ids' => 'required|array']);
        $ids = $request->ids;

        $categories = CategoryProduct::whereIn('id', $ids)->get();
        foreach ($categories as $category) {
            if ($category->image && Storage::exists('public/categoryproducts/' . $category->image)) {
                Storage::delete('public/categoryproducts/' . $category->image);
            }
            $category->delete();
        }

        return redirect()->route('categoryproducts.index')->with('success', 'Kategori produk berhasil dihapus secara massal.')->withNotify(true);
    }

// // Bulk Update Status Kategori Produk
// public function bulkUpdateStatus(Request $request)
// {
//     $request->validate([
//         'ids'    => 'required|array',
//         'status' => 'required|in:Aktif,Non-Aktif',
//     ]);

//     CategoryProduct::whereIn('id', $request->ids)->update(['status' => $request->status]);

//     return redirect()->route('categoryproducts.index')->with('success', 'Status kategori produk berhasil diperbarui.')->withNotify(true);
// }

  // Menampilkan detail kategori produk
    public function show(string $id): View
    {
        $categoryproduct = CategoryProduct::with('products')->findOrFail($id);
        return view('admin.categoryproducts.show', compact('categoryproduct'));
    }

}
