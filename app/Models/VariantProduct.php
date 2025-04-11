<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantProduct extends Model
{
    use HasFactory;

    // Table name (optional if table name != variant_products)
    protected $table = 'variant_products';

    // Mass assignment protection
    protected $fillable = [
        'product_id',
        'name',
        'image',
        'description',
        'price',
        'discount',
        'stock',
        'status',
    ];

    // Relationship: Variant belongs to a Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    // Accessor for final price after discount (optional)
    public function getFinalPriceAttribute()
    {
        if ($this->discount) {
            return $this->price - ($this->price * $this->discount / 100);
        }

        return $this->price;
    }
}
