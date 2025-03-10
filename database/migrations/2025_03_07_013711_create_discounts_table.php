<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Nama diskon
            $table->text('description')->nullable(); // Deskripsi diskon (boleh kosong)
            $table->decimal('discount_value', 5, 2); // Besaran diskon (misalnya 10.50%)
            $table->date('start_date'); // Tanggal mulai diskon
            $table->date('end_date'); // Tanggal berakhir diskon
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
