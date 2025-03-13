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
            $testimonial->image = $request->file('image')->store('testimonials');
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial added successfully.');
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
            if ($testimonial->image) Storage::delete($testimonial->image);
            $testimonial->image = $request->file('image')->store('testimonials');
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Menghapus testimoni.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Hapus gambar jika ada
        if ($testimonial->image) {
            Storage::delete($testimonial->image);
        }

        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
