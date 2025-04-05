<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('image');
            $table->text('description')->nullable(); // Menambahkan deskripsi
            $table->enum('status', ['publish', 'draft'])->default('publish'); // Menyesuaikan status
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_products');
    }
};
