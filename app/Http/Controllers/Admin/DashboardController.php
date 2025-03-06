<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Tambahkan ini
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function seller()
    {
        return view('seller.dashboard');
    }

    public function buyer()
    {
        return view('dashboard');
    }
}
