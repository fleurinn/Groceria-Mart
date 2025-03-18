<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // $table->unsignedInteger('quantity')->default(1); // Pastikan tidak bisa negatif
            // $table->decimal('price', 10, 2); // Menyimpan harga produk saat dimasukkan ke keranjang
            // $table->decimal('discount', 5, 2)->default(0); // Menyimpan diskon saat produk dimasukkan
            $table->json('cart_items'); // Menyimpan detail tambahan jika diperlukan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
