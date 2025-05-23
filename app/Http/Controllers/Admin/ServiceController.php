<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;
use App\Mail\ServiceFormSubmitted;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Menampilkan daftar layanan
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $services = Service::when($search, function ($query, $search) {
            $query->where('fullname', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('phone', 'like', "%$search%")
                ->orWhere('message', 'like', "%$search%");
        })->paginate(10);

        return view('admin.pages.services.services-index', compact('services'));
    }

    /**
     * Menyimpan layanan baru dan mengirimkan email
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'required|string|max:20',
            'message'  => 'required|string',
        ]);

        try {
            $service = Service::create($request->only(['fullname', 'email', 'phone', 'message']));

            if (!$service) {
                throw new \Exception('Gagal menyimpan data layanan ke database.');
            }

            // Kirim email ke admin (atau siapa pun penerima)
            Mail::to('admin@example.com')->send(new ServiceFormSubmitted($service));

            // Logging informasi sukses
            Log::info('Layanan berhasil disimpan dan email terkirim.', [
                'service_id' => $service->id,
                'email' => $service->email
            ]);

            return response()->json(['success' => true, 'message' => 'Layanan berhasil dikirim!']);
        } catch (\Exception $e) {
            // Logging error jika terjadi exception
            Log::error('Gagal menyimpan layanan atau mengirim email.', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat mengirim layanan.'], 500);
        }
    }


    /**
     * Menampilkan detail layanan
     */
    public function show($id): View
    {
        $service = Service::findOrFail($id);
        return view('admin.pages.services.service-submitted', compact('service'));
    }

    /**
     * Menghapus layanan secara individual
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Layanan berhasil dihapus');
    }

    /**
     * Mengirim balasan ke pengguna
     */
    public function reply(Request $request, $id)
    {
        $request->validate([
            'reply_message' => 'required|string',
        ]);
    
        $service = Service::findOrFail($id);
    
        // Kirim balasan via email
        Mail::raw($request->reply_message, function ($message) use ($service) {
            $message->to($service->email)
                    ->subject('Balasan untuk Layanan Anda');
        });
    
        return redirect()
            ->route('services.index')
            ->with('success', 'Pesan berhasil dikirim!');
    }
    




    /**
     * Menghapus banyak layanan sekaligus
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

    if (empty($ids)) {
        return response()->json(['success' => false, 'message' => 'Tidak ada layanan yang dipilih.'], 400);
    }

    $services = Service::whereIn('id', $ids)->get();

    foreach ($services as $service) {
        if ($service->image) {
            Storage::delete('public/services/' . $service->image); //sesuaikan pathnya
        }
    }

        Service::whereIn('id', $ids)->delete();

    return response()->json(['success' => true, 'message' => 'Layanan berhasil dihapus.']);
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
        Service::whereIn('id', $ids)->update(['status' => 'publish']);
        return response()->json(['success' => true, 'message' => 'Layanan berhasil dipublikasikan.']);
    }

    return response()->json(['success' => false, 'message' => 'Tidak ada layanan yang dipilih.'], 400);
}
}
