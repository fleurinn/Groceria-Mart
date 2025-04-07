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
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\ProofOfDeliveryController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
})->name('landing-page');

Route::get('/about-us', function () {
    return view('landing.pages.about-us.about-us-index');
})->name('about-us');

Route::get('/service', function () {
    return view('landing.pages.layanan.service-index');
})->name('service');

Route::get('/produk', function () {
    return view('landing.pages.produk.product-index');
})->name('produk');

Route::get('/produk-detail', function () {
    return view('landing.pages.produk.product-show');
})->name('produk-detail');

Route::get('/keranjang', function () {
    return view('landing.pages.cart.cart-index');
})->name('keranjang');

Route::get('/wishlist', function () {
    return view('landing.pages.wishlist.wishlist-index');
})->name('wishlist');

Route::get('/checkout', function () {
    return view('landing.pages.checkout.checkout-index');
})->name('checkout');

Route::get('/coupons', function () {
    return view('landing.pages.coupon.coupon-index');
})->name('coupons');

Route::get('/profile', function () {
    return view('landing.pages.profile.profile-index');
})->name('profile');




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.admin');
    Route::get('/seller/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.seller');
    Route::get('/kurir/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.kurir');
});

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::resource('/category-products', CategoryProductController::class);

    //PRODUCT
    Route::resource('products', ProductController::class)->except(['show']);
    
    // Route untuk export produk ke Excel
    Route::get('products/export', [ProductController::class, 'export'])->name('products.export');


    Route::resource('/services', ServiceController::class);
    Route::resource('/slider', SliderController::class);


    Route::resource('/abouts', AboutController::class);
    Route::resource('/carts', CartController::class);
    Route::resource('/checkouts', CheckoutController::class);
    Route::resource('/discount-vouchers', DiscountVoucherController::class);
    Route::resource('/profiles', ProfileController::class);
    Route::resource('/proof-of-deliverys', ProofOfDeliveryController::class);
    Route::resource('/reports', ReportController::class);
    Route::resource('/reviews', ReviewController::class);
    Route::resource('/shippings', ShippingController::class);
    Route::resource('/teams', TeamController::class);
    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/transactions', TransactionController::class);
    Route::resource('/wishlists', WishlistController::class);
});


Route::get('/product-left-sidebar', function () {
    return view('product-left-sidebar');
})->name('product.left.sidebar');


require __DIR__.'/auth.php';
