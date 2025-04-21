<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // ID pengguna yang melakukan pembayaran
            $table->foreignId('shipping_address_id')->constrained('shipping_addresses')->onDelete('cascade'); // ID alamat pengiriman
            $table->string('payment_id')->unique()->nullable(); // Kolom untuk menyimpan ID pembayaran unik (opsional, bisa digunakan untuk referensi internal)
            $table->string('snap_token')->nullable(); // Token dari Midtrans untuk pembayaran menggunakan Snap
            $table->enum('payment_status', ['pending', 'success', 'failed'])->default('pending'); // Status pembayaran
            $table->decimal('total', 10, 2); // Total harga
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
