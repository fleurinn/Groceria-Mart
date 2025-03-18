<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\DiscountVoucherController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\ProofOfDeliveryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
})->name('landing-page'); // Tambahkan name agar bisa digunakan di redirect

Route::get('/login', function () {
    return view('auth.login');
})->name('login'); 

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

Route::middleware('web')->group(function () {
    Route::get('/keranjang', function () {
        return view('landing.pages.cart.cart-index');
    })->name('cart.view');
});

// Route::get('/wishlist', function () {
//     return view('landing.pages.wishlist.wishlist-index');
// });

// Route::get('/checkout', function () {
//     return view('landing.pages.checkout.checkout-index');
// });




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.admin');
    Route::get('/seller/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.seller');
    Route::get('/kurir/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.kurir');
});

Route::middleware('auth')->group(function () {
    Route::resource('/category-products', CategoryProductController::class)->parameters([
        'category-products' => 'categoryproduct:slug',
    ])->names([
        'index'   => 'categoryproducts.index',
        'create'  => 'categoryproducts.create',
        'store'   => 'categoryproducts.store',
        'show'    => 'categoryproducts.show',
        'edit'    => 'categoryproducts.edit',
        'update'  => 'categoryproducts.update',
        'destroy' => 'categoryproducts.destroy',
    ]);

    // Bulk Delete
    Route::post('/category-products/bulk-delete', [CategoryProductController::class, 'bulkDelete'])->name('categoryproducts.bulkDelete');

    // Bulk Update Status
    Route::post('/category-products/bulk-update-status', [CategoryProductController::class, 'bulkUpdateStatus'])
        ->name('categoryproducts.bulkUpdateStatus')
        ->whereIn('status', ['Aktif', 'Non-Aktif']); // Sesuaikan dengan migration
});

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Rute untuk produk
    Route::resource('products', ProductController::class);

    // Rute pencarian produk berdasarkan tags atau nama
    Route::get('products/search', [ProductController::class, 'search'])->name('products.search');

    // Rute untuk ekspor produk
    Route::get('products/export', [ProductController::class, 'export'])->name('products.export');

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


Route::middleware('auth:sanctum')->prefix('discount-vouchers')->group(function () {
    Route::get('/', [DiscountVoucherController::class, 'index']); // List semua voucher
    Route::post('/', [DiscountVoucherController::class, 'store']); // Tambah voucher baru
    Route::get('/{id}', [DiscountVoucherController::class, 'show'])->where('id', '[0-9]+'); // Detail voucher
    Route::put('/{id}', [DiscountVoucherController::class, 'update'])->where('id', '[0-9]+'); // Update voucher
    Route::delete('/{id}', [DiscountVoucherController::class, 'destroy'])->where('id', '[0-9]+'); // Hapus voucher

    Route::get('/apply/{voucherCode}', [DiscountVoucherController::class, 'applyVoucherCode'])->where('voucherCode', '[A-Z0-9]+'); // Terapkan kode voucher
    Route::get('/active', [DiscountVoucherController::class, 'getVoucherList']); // Ambil daftar voucher aktif
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/reviews', [ReviewController::class, 'index']);
    Route::post('/reviews', [ReviewController::class, 'store']);
    Route::get('/reviews/{id}', [ReviewController::class, 'show']);
    Route::put('/reviews/{id}', [ReviewController::class, 'update']);
    Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index'); // Menampilkan semua item di keranjang
    Route::post('/', [CartController::class, 'store'])->name('cart.store'); // Menambahkan item ke keranjang
    Route::put('/{id}', [CartController::class, 'update'])->name('cart.update'); // Mengupdate jumlah item
    Route::delete('/{id}', [CartController::class, 'destroy'])->name('cart.destroy'); // Menghapus satu item
    Route::delete('/clear', [CartController::class, 'clearCart'])->name('cart.clear'); // Menghapus semua item di keranjang
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/reports', [ReportController::class, 'index']);
    Route::post('/reports', [ReportController::class, 'store']);
    Route::get('/reports/{id}', [ReportController::class, 'show']);
    Route::delete('/reports/{id}', [ReportController::class, 'destroy']);
});



Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/about/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::patch('/about/update', [AboutController::class, 'update'])->name('about.update');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
Route::patch('/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
Route::get('/teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit');
Route::patch('/teams/{id}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('/teams/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index']); // Mendapatkan semua wishlist user
    Route::post('/wishlist', [WishlistController::class, 'store']); // Menambahkan produk ke wishlist
    Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy']); // Menghapus produk tertentu dari wishlist
    Route::delete('/wishlist', [WishlistController::class, 'clearWishlist']); // Menghapus semua item di wishlist
    Route::post('/wishlist/check', [WishlistController::class, 'check']); // Mengecek apakah produk ada di wishlist user
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('checkout', CheckoutController::class)->except(['edit', 'create']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/shippings', [ShippingController::class, 'index']); // Menampilkan semua pengiriman
    Route::post('/shippings', [ShippingController::class, 'store']); // Membuat pengiriman baru
    Route::get('/shippings/{id}', [ShippingController::class, 'show']); // Menampilkan detail pengiriman tertentu
    Route::put('/shippings/{id}', [ShippingController::class, 'update']); // Mengupdate pengiriman
    Route::delete('/shippings/{id}', [ShippingController::class, 'destroy']); // Menghapus pengiriman

    // Endpoint tambahan untuk mengambil ongkos kirim berdasarkan asal & tujuan
    Route::get('/shipping-rates', [ShippingController::class, 'getShippingRate']); 
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/proof-of-delivery', [ProofOfDeliveryController::class, 'index']); // Ambil semua bukti pengiriman
    Route::post('/proof-of-delivery', [ProofOfDeliveryController::class, 'store']); // Tambah bukti pengiriman
    Route::get('/proof-of-delivery/{id}', [ProofOfDeliveryController::class, 'show']); // Ambil detail bukti
    Route::delete('/proof-of-delivery/{id}', [ProofOfDeliveryController::class, 'destroy']); // Hapus bukti pengiriman
});


Route::get('/product-left-sidebar', function () {
    return view('product-left-sidebar');
})->name('product.left.sidebar');


require __DIR__.'/auth.php';
