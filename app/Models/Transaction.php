<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'payment_method',
        'shipping_address',
        'status',
    ];

    // Relasi ke User (pembeli)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
