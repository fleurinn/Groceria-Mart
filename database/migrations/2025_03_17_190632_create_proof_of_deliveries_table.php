<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('proof_of_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('checkout_id')->constrained('checkouts')->onDelete('cascade'); // Relasi ke checkout
            $table->string('image'); // Path gambar bukti pengiriman
            $table->time('auto_time'); // Waktu otomatis
            $table->date('auto_date'); // Tanggal otomatis
            $table->string('auto_location'); // Lokasi otomatis
            $table->timestamps(); // created_at & updated_at otomatis dibuat
        });
    }

    public function down()
    {
        Schema::dropIfExists('proof_of_deliveries');
    }
};
