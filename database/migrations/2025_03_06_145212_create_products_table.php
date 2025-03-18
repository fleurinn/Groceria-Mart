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
            $table->string('variant')->nullable(); // Menyimpan varian produk
            $table->string('weight')->nullable(); // Berat produk dalam gram/kg
            $table->string('dimension')->nullable(); // Dimensi produk dalam cm/km
            $table->string('color')->nullable(); // Warna produk
            $table->string('slug')->unique(); // Slug untuk SEO-friendly URL
            $table->json('images')->nullable(); // Menyimpan hingga 10 gambar dalam JSON
            $table->string('image'); // Gambar utama tetap
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 5, 2)->nullable()->default(0);
            $table->integer('stock');
            $table->foreignId('category_product_id')->constrained('category_products')->onDelete('cascade');
            $table->enum('status', ['draft', 'public']);
            $table->string('tags')->nullable();
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
