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
}
