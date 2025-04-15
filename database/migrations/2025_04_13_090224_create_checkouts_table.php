<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique(); // ID unik untuk order
            $table->string('tracking_number')->unique(); // Nomor resi unik
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke users
            $table->foreignId('discount_voucher_id')->constrained('discount_vouchers')->onDelete('cascade'); // Relasi ke discount_vouchers
            $table->decimal('total_price', 15, 2); // Total harga
            $table->foreignId('shipping_address_id')->constrained('shipping_addresses')->onDelete('cascade'); // Relasi ke alamat pengiriman
            $table->string('payment_method'); // Metode pembayaran
            $table->enum('status_pembayaran', ['menunggu', 'konfirmasi', 'belum dibayar', 'paid'])->default('menunggu'); // Status pembayaran
            $table->enum('status_pengiriman', ['pending', 'processing', 'shipped', 'delivered', 'cancelled'])->default('pending'); // Status pengiriman
            $table->decimal('shipping_rates', 10, 2)->nullable(); // Biaya pengiriman
            $table->string('invoice_path')->nullable(); // Path invoice PDF
            // $table->timestamp('payment_date')->nullable(); // Tanggal pembayaran
            $table->string('snap_token')->nullable(); // Token untuk midtrans atau pembayaran lain
            $table->timestamps(); // created_at & updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
