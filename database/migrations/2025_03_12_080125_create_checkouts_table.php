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
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->decimal('total_price', 10, 2); // Harga total dengan presisi 2 angka desimal
            $table->text('shipping_address'); // Alamat pengiriman
            $table->string('payment_method'); // Metode pembayaran (misalnya: Transfer Bank, E-Wallet)
            $table->enum('status', ['pending', 'paid', 'shipped', 'delivered', 'cancelled'])->default('pending'); // Status checkout
            $table->timestamps(); // created_at & updated_at otomatis dibuat
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
