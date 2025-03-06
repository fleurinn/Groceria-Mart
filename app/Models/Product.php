<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_product_id', 'name', 'description', 'price', 'image', 'status'];

    // Relasi dengan kategori produk
    public function category()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_product_id');
    }
}
