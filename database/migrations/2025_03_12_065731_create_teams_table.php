<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migrasi untuk membuat tabel `teams`.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable(); // Menyimpan URL/path foto anggota tim
            $table->string('name'); // Nama anggota tim
            $table->string('position'); // Posisi/Jabatan anggota tim
            $table->string('instagram')->nullable(); // Link ke Instagram
            $table->string('twitter')->nullable(); // Link ke Twitter
            $table->string('facebook')->nullable(); // Link ke Facebook
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    /**
     * Menghapus tabel `teams` jika rollback dilakukan.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
