<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SliderController extends Controller
{
    // Menampilkan daftar slider
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    // Menampilkan form untuk membuat slider baru
    public function create()
    {
        return view('admin.sliders.create');
    }

    // Menyimpan slider baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title'               => 'required|string|max:255',
            'description'         => 'required|string|max:1000',
            'image'               => 'required|image|mimes:jpeg,jpg,png',
            'status'              => 'required|in:draft,publish',
            'categoryproducts_id' => 'required|exists:category_products,id',
        ]);

        // Upload gambar
        $image = $request->file('image');
        $image->storeAs('public/sliders/', $image->hashName());

        // Simpan data slider
        Slider::create([
            'title'               => $request->title,
            'description'         => $request->description,
            'image'               => $image->hashName(),
            'status'              => $request->status,
            'categoryproducts_id' => $request->categoryproducts_id,
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil ditambahkan.');
    }

    // Menampilkan form edit slider
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    // Memperbarui data slider
    public function update(Request $request, Slider $slider)
    {
        // Validasi input
        $request->validate([
            'title'               => 'required|string|max:255',
            'description'         => 'required|string|max:1000',
            'image'               => 'nullable|image|mimes:jpeg,jpg,png',
            'status'              => 'required|in:draft,publish',
            'categoryproducts_id' => 'required|exists:category_products,id',
        ]);

        // Cek jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::delete('public/sliders/' . $slider->image);

            // Upload gambar baru
            $image = $request->file('image');
            $image->storeAs('public/sliders/', $image->hashName());

            // Update dengan gambar baru
            $slider->update([
                'title'               => $request->title,
                'description'         => $request->description,
                'image'               => $image->hashName(),
                'status'              => $request->status,
                'categoryproducts_id' => $request->categoryproducts_id,
            ]);
        } else {
            // Update tanpa ubah gambar
            $slider->update([
                'title'               => $request->title,
                'description'         => $request->description,
                'status'              => $request->status,
                'categoryproducts_id' => $request->categoryproducts_id,
            ]);
        }

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil diperbarui.');
    }

    // Menghapus slider
    public function destroy(Slider $slider)
    {
        // Hapus gambar terkait jika ada
        if ($slider->image) {
            Storage::delete('public/sliders/' . $slider->image);
        }

        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil dihapus.');
    }

    // Menampilkan detail slider
    public function show(string $id): View
    {
        $slider = Slider::with('products')->findOrFail($id);
        return view('sliders.show', compact('slider'));
    }
}
