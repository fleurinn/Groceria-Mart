<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    /**
     * Relasi ke Product
     * Mengambil field yang dibutuhkan: produk_id, name, image, stok_status, harga
     */
    public function product()
    {
        return $this->belongsTo(Product::class)->select([
            'id as produk_id', 
            'name', 
            'image', 
            'stock_status as stok_status', 
            'price as harga'
        ]);
    }

    /**
     * Relasi ke User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
