<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migrasi untuk membuat tabel `testimonials`.
     */
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); // Menyimpan path/URL gambar
            $table->string('name'); // Nama pemberi testimoni
            $table->string('position'); // Jabatan atau peran pemberi testimoni
            $table->text('message'); // Isi testimoni
            $table->integer('rating')->default(5); // Rating dari 1-5
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    /**
     * Menghapus tabel `testimonials` jika rollback dilakukan.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
