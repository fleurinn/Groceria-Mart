<?php

// Bulk Delete
    Route::post('/category-products/bulk-delete', [CategoryProductController::class, 'bulkDelete'])->name('categoryproducts.bulkDelete');

    // Bulk Update Status
    Route::post('/category-products/bulk-update-status', [CategoryProductController::class, 'bulkUpdateStatus'])
        ->name('categoryproducts.bulkUpdateStatus')
        ->whereIn('status', ['Aktif', 'Non-Aktif']); // Sesuaikan dengan migration
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Rute untuk produk
    Route::resource('products', ProductController::class);

    // Rute pencarian produk berdasarkan tags atau nama
    Route::get('products/search', [ProductController::class, 'search'])->name('products.search');

    // Rute untuk ekspor produk
    Route::get('products/export', [ProductController::class, 'export'])->name('products.export');

    // Rute untuk layanan (services)
    Route::resource('services', ServiceController::class);


Route::prefix('admin')->group(function () {
    Route::resource('sliders', SliderController::class);    Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create'); // Menampilkan form tambah slider
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart', [CartController::class, 'store']);
    Route::put('/cart/{id}', [CartController::class, 'update']);
    Route::delete('/cart/{id}', [CartController::class, 'destroy']);
    Route::delete('/cart', [CartController::class, 'clearCart']); // Hapus semua item di keranjang
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
    Route::get('/notifications', [NotificationController::class, 'index']); // Menampilkan semua notifikasi user
    Route::post('/notifications', [NotificationController::class, 'store']); // Membuat notifikasi baru
    Route::get('/notifications/{id}', [NotificationController::class, 'show']); // Menampilkan detail notifikasi tertentu
    Route::patch('/notifications/{id}/read', [NotificationController::class, 'markAsRead']); // Menandai notifikasi sebagai terbaca
    Route::delete('/notifications/{id}', [NotificationController::class, 'destroy']); // Menghapus notifikasi
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



{
    $checkout = new Checkout();
    $checkout->user_id = auth()->id();
    $checkout->total_price = $request->total_price;
    $checkout->shipping_address = $request->shipping_address;
    $checkout->payment_method = $request->payment_method;
    $checkout->status_pembayaran = 'menunggu';
    $checkout->status_pengiriman = 'pending';
    $checkout->shipping_rates = $request->shipping_rates;
    
    // Pilih courier secara acak
    $courier = User::where('role', 'courier')->inRandomOrder()->first();
    $checkout->courier_id = $courier ? $courier->id : null;
    
    $checkout->save();

    return response()->json(['message' => 'Checkout berhasil', 'checkout' => $checkout]);
}



// checkout controller 
    {
        // Ambil tanggal hari ini dalam format YYYYMMDD
        $tanggal = Carbon::now()->format('Ymd');

        // Hitung jumlah checkout yang ada hari ini untuk nomor urut
        $latestOrder = Checkout::whereDate('created_at', Carbon::today())->count() + 1;
        $trackingNumber = "INV-{$tanggal}-" . str_pad($latestOrder, 4, '0', STR_PAD_LEFT);

        // Simpan checkout
        $checkout = new Checkout();
        $checkout->user_id = auth()->id();
        $checkout->order_id = strtoupper(uniqid('ORD-'));
        $checkout->tracking_number = $trackingNumber;
        $checkout->total_price = $request->total_price;
        $checkout->shipping_address_id = $request->shipping_address_id;
        $checkout->payment_method = $request->payment_method;
        $checkout->status_pembayaran = 'menunggu';
        $checkout->status_pengiriman = 'pending';
        $checkout->shipping_rates = $request->shipping_rates;
        $checkout->save();

        return response()->json(['message' => 'Checkout berhasil', 'tracking_number' => $trackingNumber]);
    }










// SHIPPING MIGRATION
{
    $table->id();
    $table->foreign('checkout_id')->references('id')->on('checkouts')->onDelete('cascade');
    $table->string('tracking_number')->unique(); // Nomor resi unik
    $table->string('courier'); // Nama kurir (JNE, J&T, dll)
    $table->enum('status', ['pending', 'shipped', 'in_transit', 'out_for_delivery', 'delivered', 'failed'])->default('pending'); // Status pengiriman
    $table->date('estimated_arrival'); // Estimasi tanggal kedatangan
    $table->string('origin'); // Kota asal pengiriman
    $table->string('destination'); // Kota tujuan pengiriman
    $table->decimal('price', 10, 2); // Biaya ongkos kirim
    $table->string('estimated_time'); // Estimasi waktu pengiriman
    $table->timestamps(); // created_at & updated_at otomatis dibuat
}