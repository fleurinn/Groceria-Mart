<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); // Primary key (id)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke users
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key ke products
            $table->integer('quantity')->default(1); // Jumlah produk, default 1
            $table->timestamps(); // created_at & updated_at otomatis
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
