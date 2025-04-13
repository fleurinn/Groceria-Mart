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
use App\Http\Controllers\VariantProductController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index')->name('landing-page');
    Route::get('/produk', 'productIndex')->name('produk');

    Route::get('/produk', 'productIndex')->name('produk');

    Route::get('/keranjang', 'cartIndex')->name('keranjang');
    Route::post('/keranjang/increase', 'increaseQuantity')->name('keranjang.increase');
    Route::post('/keranjang/decrease', 'decreaseQuantity')->name('keranjang.decrease');

});

Route::resource('/wishlist', WishlistController::class);


Route::get('/about-us', function () {
    return view('landing.pages.about-us.about-us-index');
})->name('about-us');

Route::get('/service', function () {
    return view('landing.pages.layanan.service-index');
})->name('service');

Route::get('/produk-detail', function () {
    return view('landing.pages.produk.product-show');
})->name('produk-detail');




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

    //Tambahan: Bulk actions for CategoryProduct
    Route::post('/category-products/bulk-delete', [CategoryProductController::class, 'bulkDelete'])->name('category-products.bulk-delete');
    Route::post('/category-products/bulk-draft', [CategoryProductController::class, 'bulkDraft'])->name('category-products.bulk-draft');
    Route::post('/category-products/bulk-publish', [CategoryProductController::class, 'bulkPublish'])->name('category-products.bulk-publish');

    //PRODUCT
    Route::resource('/products', ProductController::class);

    Route::resource('/variants', ProductController::class);

    Route::resource('products', ProductController::class)->except(['show']);

    //Tambahan: Bulk actions for Product
        Route::post('products/bulk-delete', [ProductController::class, 'bulkDelete'])->name('products.bulk-delete');
        Route::post('products/bulk-draft', [ProductController::class, 'bulkDraft'])->name('products.bulk-draft');
        Route::post('products/bulk-publish', [ProductController::class, 'bulkPublish'])->name('products.bulk-publish');

    
    //Route untuk export produk ke Excel
    Route::get('products/export', [ProductController::class, 'export'])->name('products.export');

    //Tambahkan ini untuk VariantProduct
    Route::resource('/variant-products', VariantProductController::class);
    //Tambahan: Bulk actions for variant
    Route::delete('/variant-products/bulk-delete', [VariantProductController::class, 'bulkDelete'])->name('variant-products.bulk-delete');
    Route::post('/variant-products/bulk-draft', [VariantProductController::class, 'bulkDraft'])->name('variant-products.bulk-draft');
    Route::post('/variant-products/bulk-publish', [VariantProductController::class, 'bulkPublish'])->name('variant-products.bulk-publish');


    Route::resource('/services', ServiceController::class);
    //Tambahan Bulk actions for Service
    Route::post('/services/bulk-delete', [ServiceController::class, 'bulkDelete'])->name('services.bulk-delete');

    Route::resource('/slider', SliderController::class);
    //Tambahan Bulk actions for Slider
    Route::post('/slider/bulk-delete', [SliderController::class, 'bulkDelete'])->name('slider.bulk-delete');
    Route::post('/slider/bulk-draft', [SliderController::class, 'bulkDraft'])->name('slider.bulk-draft');
    Route::post('/slider/bulk-publish', [SliderController::class, 'bulkPublish'])->name('slider.bulk-publish');


    Route::resource('/abouts', AboutController::class);
    Route::resource('/carts', CartController::class);
    //Tambahkan Bulk for Cart
    Route::post('/carts/bulk-delete', [CartController::class, 'bulkDelete'])->name('carts.bulk-delete');
    
    Route::resource('/checkouts', CheckoutController::class);
    //Tambahkan Bulk for checkout
    Route::post('/checkouts/bulk-delete', [CheckoutController::class, 'bulkDelete'])->name('checkouts.bulk-delete');

    Route::resource('/discount-vouchers', DiscountVoucherController::class);
    // Bulk for Discount Voucher
    Route::post('/discount-vouchers/bulk-delete', [DiscountVoucherController::class, 'bulkDelete'])->name('discount-vouchers.bulk-delete');
    Route::post('/discount-vouchers/bulk-draft', [DiscountVoucherController::class, 'bulkDraft'])->name('discount-vouchers.bulk-draft');
    Route::post('/discount-vouchers/bulk-publish', [DiscountVoucherController::class, 'bulkPublish'])->name('discount-vouchers.bulk-publish');
    Route::post('/discount-vouchers/bulk-expire', [DiscountVoucherController::class, 'bulkExpire'])->name('discount-vouchers.bulk-expire');

    Route::resource('/profiles', ProfileController::class);
    Route::resource('/proof-of-deliverys', ProofOfDeliveryController::class);
    Route::resource('/reports', ReportController::class);
    Route::resource('/reviews', ReviewController::class);

    Route::resource('/shippings', ShippingController::class);
    // Bulk for Shippings
    Route::post('/shippings/bulk-delete', [ShippingController::class, 'bulkDelete'])->name('shippings.bulk-delete');
    Route::post('/shippings/bulk-draft', [ShippingController::class, 'bulkDraft'])->name('shippings.bulk-draft');
    Route::post('/shippings/bulk-publish', [ShippingController::class, 'bulkPublish'])->name('shippings.bulk-publish');

    Route::resource('/teams', TeamController::class);
    Route::resource('/testimonials', TestimonialController::class);
    // Tambahkan Bulk for Testimonial
    Route::post('/testimonials/bulk-delete', [TestimonialController::class, 'bulkDelete'])->name('testimonials.bulk-delete');
    Route::post('/testimonials/bulk-draft', [TestimonialController::class, 'bulkDraft'])->name('testimonials.bulk-draft');
    Route::post('/testimonials/bulk-publish', [TestimonialController::class, 'bulkPublish'])->name('testimonials.bulk-publish');
    
    Route::resource('/transactions', TransactionController::class);
    // Tambahkan Bulk for transactions
    Route::post('/transactions/bulk-delete', [TransactionController::class, 'bulkDelete'])->name('transactions.bulk-delete');
    Route::post('/transactions/bulk-draft', [TransactionController::class, 'bulkDraft'])->name('transactions.bulk-draft');
    Route::post('/transactions/bulk-publish', [TransactionController::class, 'bulkPublish'])->name('transactions.bulk-publish');



    Route::resource('/wishlists', WishlistController::class);
    // Tambahkan Bulk for Wishlist
    Route::post('/wishlists/bulk-delete', [WishlistController::class, 'bulkDelete'])->name('wishlists.bulk-delete');
});


Route::get('/product-left-sidebar', function () {
    return view('product-left-sidebar');
})->name('product.left.sidebar');


require __DIR__.'/auth.php';
