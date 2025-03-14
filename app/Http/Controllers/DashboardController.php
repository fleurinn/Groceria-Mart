<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        
        if ($user->role_id == 1) {
            return view('dashboard.admin');
        } elseif ($user->role_id == 2) {
            return view('dashboard.seller');
        } elseif ($user->role_id == 4) {
            return view('dashboard.kurir');
        } elseif ($user->role_id == 3) {
            return redirect()->route('landingpage'); // Perbaikan redirect untuk buyer
        }

        return abort(403, 'Unauthorized'); // Jika role_id tidak sesuai
    }
}
