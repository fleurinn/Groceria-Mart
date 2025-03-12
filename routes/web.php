<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Admin\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/about-us', function () {
    return view('landing.pages.about-us.about-us-index');
});

Route::get('/service', function () {
    return view('landing.pages.layanan.service-index');
});

Route::get('/produk', function () {
    return view('landing.pages.produk.product-index');
});

Route::get('/produk-detail', function () {
    return view('landing.pages.produk.product-show');
});

Route::get('/keranjang', function () {
    return view('landing.pages.cart.cart-index');
});

Route::get('/wishlist', function () {
    return view('landing.pages.wishlist.wishlist-index');
});

Route::get('/checkout', function () {
    return view('landing.pages.checkout.checkout-index');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/kategori-produk', CategoryProductController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Rute untuk produk
    Route::resource('products', ProductController::class);

    // Rute pencarian produk berdasarkan tags atau nama
    Route::get('products/search', [ProductController::class, 'search'])->name('products.search');

    // Rute untuk layanan (services)
    Route::resource('services', ServiceController::class);
});

Route::prefix('admin')->group(function () {
    Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index'); // Menampilkan daftar slider
    Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create'); // Menampilkan form tambah slider
    Route::post('/sliders', [SliderController::class, 'store'])->name('sliders.store'); // Menyimpan slider baru
    Route::get('/sliders/{slider}/edit', [SliderController::class, 'edit'])->name('sliders.edit'); // Menampilkan form edit slider
    Route::put('/sliders/{slider}', [SliderController::class, 'update'])->name('sliders.update'); // Update slider
    Route::delete('/sliders/{slider}', [SliderController::class, 'destroy'])->name('sliders.destroy'); // Hapus slider
    Route::get('/sliders/{id}', [SliderController::class, 'show'])->name('sliders.show'); // Menampilkan detail slider
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/transactions', [TransactionController::class, 'index']); // List transaksi
    Route::post('/transactions', [TransactionController::class, 'store']); // Buat transaksi baru
    Route::get('/transactions/{id}', [TransactionController::class, 'show']); // Detail transaksi
    Route::put('/transactions/{id}', [TransactionController::class, 'update']); // Update transaksi
    Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']); // Hapus transaksi
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/discounts', [DiscountController::class, 'index']); // List semua diskon
    Route::post('/discounts', [DiscountController::class, 'store']); // Tambah diskon baru
    Route::get('/discounts/{id}', [DiscountController::class, 'show']); // Detail diskon
    Route::put('/discounts/{id}', [DiscountController::class, 'update']); // Update diskon
    Route::delete('/discounts/{id}', [DiscountController::class, 'destroy']); // Hapus diskon
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/reviews', [ReviewController::class, 'index']);
    Route::post('/reviews', [ReviewController::class, 'store']);
    Route::get('/reviews/{id}', [ReviewController::class, 'show']);
    Route::put('/reviews/{id}', [ReviewController::class, 'update']);
    Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart', [CartController::class, 'store']);
    Route::put('/cart/{id}', [CartController::class, 'update']);
    Route::delete('/cart/{id}', [CartController::class, 'destroy']);
    Route::delete('/cart', [CartController::class, 'clearCart']); // Hapus semua item di keranjang
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/reports', [ReportController::class, 'index']);
    Route::post('/reports', [ReportController::class, 'store']);
    Route::get('/reports/{id}', [ReportController::class, 'show']);
    Route::delete('/reports/{id}', [ReportController::class, 'destroy']);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('payments', PaymentController::class);
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


Route::get('/product-left-sidebar', function () {
    return view('product-left-sidebar');
})->name('product.left.sidebar');


require __DIR__.'/auth.php';
