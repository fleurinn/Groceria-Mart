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
        'cart_items',
        'shipping_type', // Tambahkan ini
        'shipping_cost', // Tambahkan ini
    ];

    protected $casts = [
        'cart_items' => 'array',
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

    // Menghitung total harga berdasarkan quantity * harga setelah diskon + ongkir
    public function getTotalPriceAttribute()
    {
        return ($this->quantity * $this->price) + $this->shipping_cost; // Tambahkan ongkir
    }

    // Validasi sebelum menyimpan data
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($cart) {
            $validator = Validator::make($cart->toArray(), [ // Validasi semua atribut
                'quantity' => 'integer|min:1|max:100',
                'shipping_type' => 'nullable|in:reguler,express', // Tambahkan validasi ini
                'shipping_cost' => 'nullable|numeric|min:0', // Tambahkan validasi ini
            ]);

            if ($validator->fails()) {
                throw new \Exception($validator->errors()->first()); // Ambil pesan error pertama
            }
        });
    }
}
