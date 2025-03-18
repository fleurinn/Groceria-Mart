<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    return view('landing-page'); // Pastikan file "index.blade.php" ada di folder resources/views/landing-page
}

}
