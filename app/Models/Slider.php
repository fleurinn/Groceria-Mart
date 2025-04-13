<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [ 'image', 'title', 'description', 'category_product_id' , 'status'];

    public function categoryproduct()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_product_id');
    }
}