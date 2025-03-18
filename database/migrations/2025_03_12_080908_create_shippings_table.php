<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('shippings', function (Blueprint $table) {
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
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
