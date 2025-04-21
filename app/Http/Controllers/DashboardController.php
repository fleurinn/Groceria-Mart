<?php
namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        // Jika pengguna belum login atau tidak memiliki role_id, arahkan ke landing page
        if (!$user || !$user->role_id) {
            return redirect()->route('landing-page');
        }

        // Menghitung jumlah pembayaran berdasarkan status
        $payments = Payment::selectRaw('status_pengiriman, count(*) as count')
            ->groupBy('status_pengiriman')
            ->get();

        $status_counts = [
            'proses' => 0,
            'dalam perjalanan' => 0,
            'selesai' => 0
        ];

        foreach ($payments as $payment) {
            $status_counts[$payment->status_pengiriman] = $payment->count;
        }

        switch ($user->role_id) {
            case 1:
                // Admin dashboard
                return view('admin.pages.beranda.index', compact('user', 'status_counts'));
            case 2:
                // Seller dashboard
                return view('admin.dashboard.seller', compact('user', 'status_counts'));
            case 3:
                // Buyer diarahkan ke landing page
                return redirect()->route('landing-page');
            case 4:
                // Courier dashboard
                return view('admin.dashboard.courier', compact('user', 'status_counts'));
            default:
                return abort(403, 'Unauthorized');
        }
    }
}
