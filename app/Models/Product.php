<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_product_id',
        'name',
        'variant',
        'weight',
        'dimension',
        'color',
        'slug',
        'images',
        'description',
        'price',
        'image',
        'status',
        'stock',
        'discount',
        'tags',
    ];

    protected $casts = [
        'images' => 'array', // Supaya `images` otomatis dikonversi menjadi array
    ];

    public function categoryproducts()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_product_id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function category()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_product_id');
    }

    public function variants()
    {
        return $this->hasMany(VariantProduct::class, 'product_id', 'id');
    }
}

