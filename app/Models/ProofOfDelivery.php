<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProofOfDelivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkout_id',
        'image',
        'auto_time',
        'auto_date',
        'auto_location'
    ];

    protected $casts = [
        'auto_time' => 'datetime:H:i:s', // Format jam
        'auto_date' => 'date:Y-m-d', // Format tanggal
    ];

    public function checkout()
    {
        return $this->belongsTo(Checkout::class, 'checkout_id');
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->auto_time = now()->format('H:i:s'); // Waktu saat ini
            $model->auto_date = now()->format('Y-m-d'); // Tanggal saat ini
        });
    }
}
