<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke users.id
            $table->foreignId('transaction_id')->nullable()->constrained('transactions')->onDelete('cascade'); // Relasi ke transactions.id (bisa null)
            $table->text('message'); // Isi notifikasi
            $table->enum('status', ['unread', 'read'])->default('unread'); // Status notifikasi
            $table->timestamps(); // created_at & updated_at otomatis dibuat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
