<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariantProductController extends Controller
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'discount',
        'stock',
        'product_id', // Pastikan ada kolom ini untuk relasi
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
