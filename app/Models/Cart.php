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
        'shipping_type',
        'shipping_cost',
        'shipping_address_id',
        'discount_voucher_id',
        'price', //Tambahkan ini
    ];

    protected $casts = [
        'cart_items' => 'array',
    ];

    // Total harga setelah diskon + ongkir
    public function getTotalPriceAttribute()
    {
        $subtotal = $this->quantity * $this->price;
        $discountAmount = 0;

        if ($this->discountVoucher) {
            $discountAmount = ($this->discountVoucher->amount ?? 0);
        }

        return max(0, $subtotal + $this->shipping_cost - $discountAmount);
    }

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

    // Relasi ke Shipping Address
    public function shippingAddress()
    {
        return $this->belongsTo(ShippingAddress::class);
    }

    // Relasi ke Discount Voucher
    public function discountVoucher()
    {
        return $this->belongsTo(DiscountVoucher::class);
    }

    // Hitung harga produk setelah diskon
    public function getPriceAttribute()
    {
        if ($this->product) {
            return $this->product->price * ((100 - $this->product->discount) / 100);
        }
        return 0;
    }

    // Validasi sebelum menyimpan data
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($cart) {
            $validator = Validator::make($cart->toArray(), [
                'quantity' => 'integer|min:1|max:100',
                'shipping_type' => 'nullable|in:reguler,express',
                'shipping_cost' => 'nullable|numeric|min:0',
            ]);

            if ($validator->fails()) {
                throw new \Exception($validator->errors()->first());
            }
        });
    }
}
