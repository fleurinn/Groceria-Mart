<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider; // Ubah model menjadi Slider
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Tambahkan import Storage
use Illuminate\View\View; //Tambahkan import View

class SliderController extends Controller
{
    // Menampilkan daftar slider
    public function index()
    {
        $sliders = Slider::all(); // Ubah variabel dan model
        return view('admin.sliders.index', compact('sliders')); // Ubah view
    }

    // Menampilkan form untuk membuat slider baru
    public function create()
    {
        return view('admin.sliders.create'); // Ubah view
    }

    // Menyimpan slider baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title'              => 'required|string|max:255',
            'description'        => 'required|string|max:1000',
            'name'               => 'required|string|max:255',
            'image'              => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'status'             => 'required|in:draft,publik',
            'categoryproducts_id'=> 'required|exists:category_products,id', // Validasi ID kategori
        ]);
        

        // Upload image
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/sliders/', $image->hashName()); // Ubah path

        // Menyimpan slider
        Slider::create([
            'name' => $request->name,
            'image' => $image->hashName(),
            'status' => $request->status,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('sliders.index')->with('success', 'Slider berhasil ditambahkan.'); // Ubah route
    }

    // Menampilkan form untuk mengedit slider
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider')); // Ubah view
    }

    // Mengupdate slider
    public function update(Request $request, Slider $slider)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'status' => 'required|in:draft,publik',
        ]);

        // If a new image is uploaded, handle the image update
        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::delete('public/sliders/' . $slider->image); // Ubah path

            // Upload new image
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/sliders/', $image->hashName()); // Ubah path

            // Update slider
            $slider->update([
                'name' => $request->name,
                'image' => $image->hashName(),
                'status' => $request->status,
            ]);
        } else {
            // Ubah slider tanpa image
            $slider->update([
                'name' => $request->name,
                'status' => $request->status,
            ]);
        }

        // Redirect dengan pesan sukses
        return redirect()->route('sliders.index')->with('success', 'Slider berhasil diperbarui.'); // Ubah route
    }

    // Menghapus slider
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider berhasil dihapus.'); // Ubah route
    }

    public function show(string $id): View
    {
        // Ambil slider berdasarkan ID dan load produk yang terelasi
        $slider = Slider::with('products')->find($id); // Ubah model dan relasi

        return view('sliders.show', compact('slider')); // Ubah view
    }
}