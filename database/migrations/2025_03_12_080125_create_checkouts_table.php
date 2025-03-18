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
            $table->string('order_id')->unique()->nullable(); // ID unik untuk order
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke users
            $table->decimal('total_price', 15, 2); // Total harga
            $table->text('shipping_address'); // Alamat pengiriman
            $table->string('payment_method'); // Metode pembayaran
            $table->enum('status_pembayaran', ['menunggu', 'konfirmasi', 'belum dibayar', 'paid'])->default('menunggu'); // Status pembayaran
            $table->enum('status_pengiriman', ['pending', 'processing', 'shipped', 'delivered', 'cancelled'])->default('pending'); // Status pengiriman
            $table->decimal('shipping_rates', 10, 2)->nullable(); // Biaya pengiriman
            $table->foreignId('shipping_id')->nullable()->constrained('shippings')->onDelete('set null'); // Relasi ke shipping
            $table->string('invoice_path')->nullable(); // Path invoice PDF
            $table->timestamp('payment_date')->nullable(); // Tanggal pembayaran
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
