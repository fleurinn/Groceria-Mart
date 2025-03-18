<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkout_id',
        'tracking_number',
        'courier',
        'status',
        'estimated_arrival',
        'origin',
        'destination',
        'price',
        'estimated_time',
    ];

    /**
     * Relasi ke model Checkout.
     */
    public function checkout()
    {
        return $this->belongsTo(Checkout::class);
    }
}
