<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function getSalesByMonth($month)
    {
        try {
            // Validasi dan parsing bulan (format: YYYY-MM)
            $date = Carbon::createFromFormat('Y-m', $month);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Format bulan tidak valid. Gunakan format YYYY-MM.'], 400);
        }

        // Total penjualan dalam bulan itu
        $sales = Payment::whereYear('created_at', $date->year)
                        ->whereMonth('created_at', $date->month)
                        ->sum('total');

        // Penjualan harian untuk grafik
        $dailySales = Payment::selectRaw('DAY(created_at) as day, SUM(total) as total')
                            ->whereYear('created_at', $date->year)
                            ->whereMonth('created_at', $date->month)
                            ->groupBy('day')
                            ->orderBy('day')
                            ->get();

        // Format data
        $dates = $dailySales->pluck('day');
        $salesData = $dailySales->pluck('total');

        return response()->json([
            'sales' => $salesData,
            'dates' => $dates
        ]);
    }

    public function dashboard()
    {
        $user = Auth::user();

        if (!$user || !$user->role_id) {
            return redirect()->route('landing-page');
        }

        $reviews = Review::with('user', 'product')->latest()->get();

        // Hitung jumlah pembayaran berdasarkan status_pengiriman
        $payments = Payment::selectRaw('status_pengiriman, count(*) as count')
            ->groupBy('status_pengiriman')
            ->get();

        // Inisialisasi status
        $status_counts = [
            'proses' => 0,
            'dalam perjalanan' => 0,
            'selesai' => 0
        ];

        // Isi data berdasarkan hasil query
        foreach ($payments as $payment) {
            $status = Str::lower($payment->status_pengiriman);
            if (isset($status_counts[$status])) {
                $status_counts[$status] = $payment->count;
            }
        }

        // Tentukan view berdasarkan role_id
        switch ($user->role_id) {
            case 1:
                return view('admin.pages.beranda.index', compact('user', 'status_counts', 'reviews'));
            case 2:
                return view('admin.dashboard.seller', compact('user', 'status_counts', 'reviews'));
            case 3:
                return redirect()->route('landing-page');
            case 4:
                return view('admin.dashboard.courier', compact('user', 'status_counts', 'reviews'));
            default:
                return abort(403, 'Unauthorized');
        }
    }
}
