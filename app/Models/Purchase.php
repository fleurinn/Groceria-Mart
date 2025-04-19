<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_id',
        'product_id',
        'quantity',
        'price',
    ];

    /**
     * Relasi: Purchase milik User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi: Purchase milik Transaksi
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Relasi: Purchase milik Produk
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
