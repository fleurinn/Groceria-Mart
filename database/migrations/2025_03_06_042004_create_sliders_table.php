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
            $table->string('name');
            $table->string('image');
            $table->string('title');
            $table->string('description');
<<<<<<< HEAD
            $table->string('categoryproducts_id');
=======
            $table->foreignId('category_products_id')->references('id')->on('category_products')->onDelete('cascade');
>>>>>>> 60426b763d4763c4a2a68f7ae24708c3df62007b
            $table->enum('status', ['draft', 'publik'])->default('publik'); // Tambahkan default 'draft'
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