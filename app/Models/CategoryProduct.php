<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description', 'status'];

    // Relasi dengan produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Relasi dengan slider
    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }

    public function vouchers()
{
    return $this->hasMany(DiscountVoucher::class);
}
}
