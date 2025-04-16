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
        Schema::table('discount_vouchers', function (Blueprint $table) {
            if (!Schema::hasColumn('discount_vouchers', 'discount_type')) {
                $table->enum('discount_type', ['global', 'spesific_product'])->default('global'); // Status diskon
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('discount_vouchers', function (Blueprint $table) {
            if (Schema::hasColumn('discount_vouchers', 'discount_type')) {
                $table->enum('discount_type', ['global', 'spesific_product'])->default('global'); // Status diskon
            }
        });
    }
};