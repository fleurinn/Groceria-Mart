<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Membuat tabel products
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 5, 2)->default(0); // Default 0 jika tidak ada diskon
            $table->integer('stock');
            $table->foreignId('category_products_id')->constrained('category_products')->onDelete('cascade');
            $table->enum('status', ['draft', 'publik']);
            $table->string('tag');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
