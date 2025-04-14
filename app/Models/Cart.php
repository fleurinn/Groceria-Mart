<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'cart_items'
    ];

    protected $casts = [
        'cart_items' => 'array', // Mengubah cart_items menjadi array secara otomatis
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Menghitung harga setelah diskon otomatis
    public function getPriceAttribute()
    {
        if ($this->product) {
            return $this->product->price * ((100 - $this->product->discount) / 100);
        }
        return 0;
    }

    // Menghitung total harga berdasarkan quantity * harga setelah diskon
    public function getTotalPriceAttribute()
    {
        return $this->quantity * $this->price;
    }

}
