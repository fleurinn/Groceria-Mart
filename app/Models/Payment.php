<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_id',
        'snap_token',
        'transaction_status',
        'transaction_id',
        'total', // Menggunakan 'total' sesuai dengan migrasi
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Cart
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // Scope untuk filter pembayaran berdasarkan tahun
    public function scopeFilterByYear($query, $year)
    {
        return $query->whereYear('created_at', $year); // Menggunakan created_at karena tidak ada payment_date di migrasi
    }

    // Scope untuk filter pembayaran berdasarkan bulan
    public function scopeFilterByMonth($query, $year, $month)
    {
        return $query->whereYear('created_at', $year)->whereMonth('created_at', $month);  // Menggunakan created_at
    }

    // Scope untuk filter pembayaran berdasarkan minggu
    public function scopeFilterByWeek($query, $year, $week)
    {
         return $query->whereYear('created_at', $year)
                      ->whereRaw('WEEK(created_at, 1) = ?', [$week]); // Menggunakan created_at
    }
}
