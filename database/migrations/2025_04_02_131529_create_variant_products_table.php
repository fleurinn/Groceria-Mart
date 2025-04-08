<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('variant_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('name'); // Nama varian
            $table->string('image')->nullable(); // Gambar varian (opsional)
            $table->text('description')->nullable(); // Deskripsi varian (nullable biar fleksibel)
            $table->decimal('price', 10, 2)->nullable(); // Harga khusus varian
            $table->decimal('discount', 5, 2)->nullable()->default(0); // Diskon varian
            $table->integer('stock')->default(0); // Stok varian
            $table->enum('status', ['draft', 'publish'])->default('draft'); // Status varian
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_products');
    }
};
