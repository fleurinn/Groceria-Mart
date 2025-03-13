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

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Validasi sebelum menyimpan data
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($cart) {
            $validator = Validator::make(['quantity' => $cart->quantity], [
                'quantity' => 'integer|min:1|max:100'
            ]);

            if ($validator->fails()) {
                throw new \Exception('Quantity must be between 1 and 100.');
            }
        });
    }
}
