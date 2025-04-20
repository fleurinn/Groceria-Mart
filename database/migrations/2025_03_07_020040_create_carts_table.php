<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shipping_address_id')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->decimal('shipping_cost', 10, 2)->nullable();
            $table->unsignedBigInteger('discount_voucher_id')->nullable();
            $table->unsignedInteger('quantity')->default(1);
            $table->json('cart_items')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            // $table->string('shipping_type')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('shipping_address_id')->references('id')->on('shipping_addresses')->onDelete('set null');
            $table->foreign('discount_voucher_id')->references('id')->on('discount_vouchers')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
};