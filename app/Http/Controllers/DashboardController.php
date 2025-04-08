<?php

namespace App\Http\Controllers;
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
        
        switch ($user->role_id) {
            case 1:
                return view('admin.pages.beranda.index'); // Admin dashboard
            case 2:
                return view('admin.dashboard.seller'); // Seller dashboard
            case 3:
                return redirect()->route('landing-page'); // Buyer diarahkan ke landing page
            case 4:
                return view('admin.dashboard.courier'); // Courier dashboard
            default:
                return abort(403, 'Unauthorized'); // Jika role_id tidak sesuai
        }
    }
}
