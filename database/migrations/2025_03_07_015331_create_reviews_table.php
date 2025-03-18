<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Primary key (id)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke users
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key ke products
            $table->string('email'); // Menyimpan email pengguna
            $table->integer('rating')->default(1); // Nilai rating dari 1-5
            $table->text('comment')->nullable(); // Review teks opsional
            $table->timestamps(); // created_at & updated_at otomatis
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
