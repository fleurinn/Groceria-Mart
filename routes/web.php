<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});


Route::get('/slider', function () {
    return view('landing.pages.slider.slider-index');
});

Route::get('/category-produk', function () {
    return view('landing.pages.produk.category-product.categoryproduct-index');
});

Route::get('/produk', function () {
    return view('landing.pages.produk.product.product-index');
});

Route::get('/layanan', function () {
    return view('landing.pages.layanan.service-index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('services', ServiceController::class);
});

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth', 'verified');
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');

// Route::get('/seller/dashboard', function () {
//     return view('seller.dashboard');
// })->name('seller.dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('/kategori-produk', CategoryProductController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product-left-sidebar', function () {
    return view('product-left-sidebar');
})->name('product.left.sidebar');


require __DIR__.'/auth.php';
