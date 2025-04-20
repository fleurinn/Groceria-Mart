<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('discount_vouchers', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Nama diskon
            $table->text('description')->nullable(); // Deskripsi diskon (boleh kosong)
            $table->foreignId('category_product_id')->nullable()->constrained('category_products')->onDelete('cascade'); // Relasi ke produk (jika ada)
            $table->enum('discount_type', ['global', 'spesific_product'])->default('global'); // Status diskon
            $table->string('discount_code')->unique(); // Kode unik diskon (contohnya: DISCOUNT-MBHY3NZ3)
            $table->decimal('discount_value', 10, 2); // Besaran diskon (misalnya 10%)
            $table->date('start_date'); // Tanggal mulai diskon
            $table->date('end_date'); // Tanggal berakhir diskon
            $table->enum('status', ['draft', 'publish', 'expired'])->default('draft'); // Status diskon
            $table->timestamps(); // created_at & updated_at
            $table->string('image')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('discount_vouchers');
    }
};
