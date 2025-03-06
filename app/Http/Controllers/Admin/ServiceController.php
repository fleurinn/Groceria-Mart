<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ServiceController extends Controller
{
    // Menampilkan daftar layanan
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    // Menampilkan form untuk membuat layanan baru
    public function create()
    {
        return view('admin.services.create');
    }

    // Menyimpan layanan baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image'       => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'status'      => 'required|in:draft,publik',
        ]);

        // Upload image
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/services/', $image->hashName());

        // Menyimpan layanan
        Service::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $image->hashName(),
            'status'      => $request->status,
        ]);

        return redirect()->route('services.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit layanan
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    // Mengupdate layanan
    public function update(Request $request, Service $service)
    {
        // Validasi input
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'status'      => 'required|in:draft,publik',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($service->image && Storage::exists('public/services/' . $service->image)) {
                Storage::delete('public/services/' . $service->image);
            }

            // Upload gambar baru
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/services/', $image->hashName());

            $service->update([
                'title'       => $request->title,
                'description' => $request->description,
                'image'       => $image->hashName(),
                'status'      => $request->status,
            ]);
        } else {
            // Update layanan tanpa mengubah gambar
            $service->update([
                'title'       => $request->title,
                'description' => $request->description,
                'status'      => $request->status,
            ]);
        }

        return redirect()->route('services.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    // Menghapus layanan
    public function destroy(Service $service)
    {
        // Hapus gambar terkait jika ada
        if ($service->image && Storage::exists('public/services/' . $service->image)) {
            Storage::delete('public/services/' . $service->image);
        }

        $service->delete();
        return redirect()->route('services.index')->with('success', 'Layanan berhasil dihapus.');
    }

    // Menampilkan detail layanan
    public function show(string $id): View
    {
        $service = Service::findOrFail($id);
        return view('admin.services.show', compact('service'));
    }
}
