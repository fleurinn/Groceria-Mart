<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
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
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'required|string|max:20',
            'message'  => 'required|string',
        ]);

        // Simpan ke database
        Service::create($request->only(['fullname', 'email', 'phone', 'message']));

        return redirect()->route('services.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Menampilkan detail layanan
    public function show(Service $service): View
    {
        return view('admin.services.show', compact('service'));
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
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'required|string|max:20',
            'message'  => 'required|string',
        ]);

        // Update data layanan
        $service->update($request->only(['fullname', 'email', 'phone', 'message']));

        return redirect()->route('services.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    // Menghapus layanan
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Layanan berhasil dihapus.');
    }

    //Bulk
    public function bulkDelete(Request $request)
{
    $ids = $request->input('ids');

    if (empty($ids)) {
        return response()->json(['success' => false, 'message' => 'Tidak ada layanan yang dipilih.'], 400);
    }

    $services = Service::whereIn('id', $ids)->get();

    foreach ($services as $service) {
        if ($service->image) {
            $path = public_path('storage/services/' . $service->image);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        

    Service::whereIn('id', $ids)->delete();

    return response()->json(['success' => true, 'message' => 'Layanan berhasil dihapus.']);
}
}

public function bulkDraft(Request $request)
{
    $ids = $request->input('ids');

    if ($ids) {
        Service::whereIn('id', $ids)->update(['status' => 'draft']);
        return response()->json(['success' => true, 'message' => 'Layanan berhasil diubah ke draft.']);
    }

    return response()->json(['success' => false, 'message' => 'Tidak ada layanan yang dipilih.'], 400);
}

public function bulkPublish(Request $request)
{
    $ids = $request->input('ids');

    if ($ids) {
        Service::whereIn('id', $ids)->update(['status' => 'publik']);
        return response()->json(['success' => true, 'message' => 'Layanan berhasil dipublikasikan.']);
    }

    return response()->json(['success' => false, 'message' => 'Tidak ada layanan yang dipilih.'], 400);
}
}
