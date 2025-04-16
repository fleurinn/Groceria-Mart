<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // ID pengguna yang melakukan pembayaran
            $table->foreignId('cart_id')->constrained('carts')->onDelete('cascade'); // ID keranjang yang terkait
            $table->foreignId('discount_voucher_id')->constrained('discount_vouchers')->onDelete('cascade'); // ID keranjang yang terkait
            $table->string('snap_token')->nullable();
            $table->decimal('shipping_cost', 10, 2)->nullable();
            $table->string('transaction_status'); // Status transaksi (misalnya: 'pending', 'success', 'failed')
            $table->string('transaction_id')->unique(); // ID transaksi dari Midtrans
            $table->decimal('total', 10, 2); // Total harga (Harga total cart + discount voucher + Harga pengantaran)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('snap_token');
        });
        
        Schema::dropIfExists('payments');
    }
}