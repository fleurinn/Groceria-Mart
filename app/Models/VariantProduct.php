<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantProduct extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'name', 'image', 'description', 'price', 'discount', 'stock'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
