<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryProductController extends Controller
{
    public function index(Request $request)
{
    // Inisialisasi query builder
    $query = CategoryProduct::withCount('products');

    // Menambahkan kondisi berdasarkan status jika ada
    if ($request->has('status') && in_array($request->status, ['draft', 'publish'])) {
        $query->where('status', $request->status);
    }

    // Mengambil data dengan paginasi
    $categoryproducts = $query->paginate(10);

    // Mengirim data ke view
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
            'status' => 'required|in:draft,publish',
        ],
    
        [
            'name.required' => 'Kolom nama wajib diisi.', // Pesan khusus untuk validasi name
            'status.required' => 'Kolom status wajib diisi.', // Contoh untuk field lain
            'image' => 'Kolom gambar wajib diisi.',
        ]);

        $cekNama = CategoryProduct::where('name', $request->name)->exists();
        if ($cekNama) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Nama ini sudah digunakan, silakan gunakan nama lain.');
        };

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path('storage/categoryproducts'), $imageName);

        CategoryProduct::create([
            'name'        => $request->name,
            'image'       => $imageName,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        return redirect()->route('category-products.index')->with('success', 'Kategori produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $categoryproduct = CategoryProduct::findOrFail($id);
        return view('admin.pages.products.kategori-produk.edit', compact('categoryproduct'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png',
            'description' => 'nullable|string',
            'status'      => 'required|in:draft,publish',
        ],
    
        [
            'name.required' => 'Kolom nama wajib diisi.', // Pesan khusus untuk validasi name
            'status.required' => 'Kolom status wajib diisi.', // Contoh untuk field lain
            'image' => 'Kolom gambar wajib diisi.',
        ]);

        $cekNama = CategoryProduct::where('name', $request->name)->exists();
        if ($cekNama) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Nama ini sudah digunakan, silakan gunakan nama lain.');
        };

        // Cek apakah nama sudah ada di database
        $cekName = CategoryProduct::where('name', $request->name)->where('id', '!=', $id)->exists();
        if ($cekName) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Nama ini sudah digunakan, silahkan gunakan nama lain.');
        }

        try {
            $categoryproduct = CategoryProduct::findOrFail($id);

            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                $oldImagePath = public_path('storage/categoryproducts/' . $categoryproduct->image);
                if ($categoryproduct->image && file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }

                // Simpan gambar baru
                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->move(public_path('storage/categoryproducts'), $imageName);
                $categoryproduct->image = $imageName; // Update image
            }

            // Update data kategori
            $categoryproduct->name = $request->name;
            $categoryproduct->description = $request->description;
            $categoryproduct->status = $request->status;
            $categoryproduct->save();

            return redirect()->route('category-products.index')->with('success', 'Kategori berhasil diubah!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function destroy($id)
    {
        // Mencari kategori produk berdasarkan ID
        $categoryproduct = CategoryProduct::findOrFail($id);

        try {
            // Hapus gambar dari storage jika ada
            if ($categoryproduct->image) {
                $oldImagePath = public_path('storage/categoryproducts/' . $categoryproduct->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file gambar
                }
            }

            // Hapus kategori produk dari database
            $categoryproduct->delete();

            return redirect()->route('category-products.index')->with('success', 'Kategori berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus kategori.');
        }
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
                Storage::delete('public/categoryproducts/' . $category->image);
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
            CategoryProduct::whereIn('id', $ids)->update(['status' => 'publish']);
            return response()->json(['success' => true, 'message' => 'Kategori produk berhasil dipublikasikan.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada kategori produk yang dipilih.'], 400);
    }

}

