<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('shipping_address_id')->nullable()->constrained('shipping_addresses')->onDelete('set null');
            $table->foreignId('discount_voucher_id')->nullable()->constrained('discount_vouchers')->onDelete('set null');
            $table->string('transaction_code')->unique(); // Kode unik untuk transaksi
            $table->decimal('shipping_cost', 10, 2)->default(0);
            $table->decimal('voucher_amount', 10, 2)->default(0); // Nilai voucher yang digunakan
            $table->decimal('total_amount', 10, 2); // Total harga setelah diskon dan ongkir
            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}