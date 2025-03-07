<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // Primary key (id)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke users
            $table->enum('report_type', ['daily', 'weekly', 'monthly', 'yearly'])->default('daily'); // Enum jenis laporan
            $table->timestamp('generated_at')->useCurrent(); // Waktu pembuatan laporan
            $table->timestamps(); // created_at & updated_at otomatis
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
