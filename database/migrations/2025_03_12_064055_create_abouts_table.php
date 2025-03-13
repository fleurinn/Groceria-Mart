<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migrasi untuk membuat tabel `abouts`.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable(); // Menyimpan URL atau path gambar pertama
            $table->string('image2')->nullable(); // Menyimpan URL atau path gambar kedua
            $table->string('image3')->nullable(); // Menyimpan URL atau path gambar ketiga
            $table->string('title'); // Judul tentang halaman ini
            $table->text('description'); // Deskripsi tentang halaman ini
            $table->timestamps(); // Otomatis menambahkan created_at dan updated_at
        });
    }

    /**
     * Menghapus tabel `abouts` jika rollback dilakukan.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
