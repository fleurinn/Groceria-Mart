<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke users
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade'); // Relasi ke transactions
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending'); // Status pembayaran
            $table->timestamp('payment_date')->nullable(); // Tanggal pembayaran
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
