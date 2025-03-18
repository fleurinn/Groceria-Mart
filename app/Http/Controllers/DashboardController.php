<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        
        switch ($user->role_id) {
            case 1:
                return view('dashboard.admin'); // Admin dashboard
            case 2:
                return view('dashboard.seller'); // Seller dashboard
            case 3:
                return redirect()->route('landing-page'); // Buyer diarahkan ke landing page
            case 4:
                return view('dashboard.courier'); // Courier dashboard
            default:
                return abort(403, 'Unauthorized'); // Jika role_id tidak sesuai
        }
    }
}
