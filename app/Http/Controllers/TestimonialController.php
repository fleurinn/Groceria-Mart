<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Menampilkan semua testimoni.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get(); // Mengambil semua testimoni terbaru
        return view('testimonials.index', compact('testimonials'));
    }

    /**
     * Menampilkan form untuk menambah testimoni.
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Menyimpan testimoni baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->message = $request->message;
        $testimonial->rating = $request->rating;

        // Upload image jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('storage/testimonials'), $imageName);
            $testimonial->image = 'testimonials/' . $imageName;
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil ditambahkan');
    }

    /**
     * Menampilkan form edit testimoni.
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('testimonials.edit', compact('testimonial'));
    }

    /**
     * Memperbarui testimoni.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->message = $request->message;
        $testimonial->rating = $request->rating;

        // Ganti gambar jika ada file baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($testimonial->image && file_exists(public_path('storage/' . $testimonial->image))) {
                unlink(public_path('storage/' . $testimonial->image));
            }
        
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('storage/testimonials'), $imageName);
            $testimonial->image = 'testimonials/' . $imageName;
        }
        

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimoni berhasil diperbarui.');
    }

    /**
     * Menghapus testimoni.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Hapus gambar jika ada
        if ($testimonial->image && file_exists(public_path('storage/' . $testimonial->image))) {
            unlink(public_path('storage/' . $testimonial->image));
        }
        

        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimoni berhasil dihapus.');
    }

    //Bulk
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada Testimonial yang dipilih.'], 400);
        }

        $testimonials = Testimonial::whereIn('id', $ids)->get();

        foreach ($testimonials as $testimonial) {
            if ($testimonial->image && file_exists(public_path('storage/' . $testimonial->image))) {
                unlink(public_path('storage/' . $testimonial->image));
            }            
        }

        Testimonial::whereIn('id', $ids)->delete();

        return response()->json(['success' => true, 'message' => 'Testimonial berhasil dihapus.']);
    }

    public function bulkDraft(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            Testimonial::whereIn('id', $ids)->update(['status' => 'draft']);
            return response()->json(['success' => true, 'message' => 'Testimonial berhasil diubah ke draft.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada Testimonial yang dipilih.'], 400);
    }

    public function bulkPublish(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            Testimonial::whereIn('id', $ids)->update(['status' => 'publik']);
            return response()->json(['success' => true, 'message' => 'Testimonial berhasil dipublikasikan.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada Testimonial yang dipilih.'], 400);
    }
}
