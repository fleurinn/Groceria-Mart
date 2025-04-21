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
        'shipping_addresses_id',
        'payment_id',    // Tambahkan payment_id
        'snap_token',
        'payment_status', // Tambahkan payment_status
        'total',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shippingAddresses()
    {
        return $this->belongsTo(ShippingAddress::class);
    }

    // Relasi ke Transaction
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    // Scope untuk filter pembayaran berdasarkan tahun
    public function scopeFilterByYear($query, $year)
    {
        return $query->whereYear('created_at', $year);
    }

    // Scope untuk filter pembayaran berdasarkan bulan
    public function scopeFilterByMonth($query, $year, $month)
    {
        return $query->whereYear('created_at', $year)->whereMonth('created_at', $month);
    }

    // Scope untuk filter pembayaran berdasarkan minggu
    public function scopeFilterByWeek($query, $year, $week)
    {
        return $query->whereYear('created_at', $year)
            ->whereRaw('WEEK(created_at, 1) = ?', [$week]);
    }

    public function shippingAddress()
    {
        return $this->belongsTo(ShippingAddress::class);
    }
}
