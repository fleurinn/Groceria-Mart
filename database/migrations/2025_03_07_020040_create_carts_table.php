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
            $table->unsignedInteger('quantity')->default(1); // Pastikan tidak bisa negatif
            $table->json('cart_items')->nullable(); // Diubah agar bisa NULL
            $table->string('shipping_type')->nullable(); // Tambahkan ini: Jenis pengiriman
            $table->decimal('shipping_cost', 10, 2)->nullable(); // Tambahkan ini: Biaya ongkir
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
