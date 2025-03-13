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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade'); // Relasi ke transactions.id
            $table->string('tracking_number')->unique(); // Nomor resi unik
            $table->string('courier'); // Nama kurir (JNE, J&T, dll)
            $table->enum('status', ['pending', 'shipped', 'in_transit', 'out_for_delivery', 'delivered', 'failed'])->default('pending'); // Status pengiriman
            $table->date('estimated_arrival'); // Estimasi tanggal kedatangan
            $table->timestamps(); // created_at & updated_at otomatis dibuat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
