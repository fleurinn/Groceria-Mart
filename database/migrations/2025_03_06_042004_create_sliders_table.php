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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            // $table->string('title');
            $table->string('description');
            $table->string('categoryproducts_id');
            $table->foreignId('category_products_id')->references('id')->on('category_products')->onDelete('cascade');
            $table->enum('status', ['draft', 'publish'])->default('publish'); // Tambahkan default 'draft'
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};