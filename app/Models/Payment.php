<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',      // ID unik pembayaran
        'user_id',
        'transaction_id',
        'product_id',      // Produk yang dibeli
        'status',          // Status pembayaran: menunggu, konfirmasi, belum dibayar
        'total_amount',    // Total nominal pembayaran
        'invoice_path',    // Path untuk invoice PDF
        'payment_date',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Transaction
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    // Relasi ke Product (jika ada produk dalam transaksi)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Scope untuk filter pembayaran berdasarkan tahun
    public function scopeFilterByYear($query, $year)
    {
        return $query->whereYear('payment_date', $year);
    }

    // Scope untuk filter pembayaran berdasarkan bulan
    public function scopeFilterByMonth($query, $year, $month)
    {
        return $query->whereYear('payment_date', $year)->whereMonth('payment_date', $month);
    }

    // Scope untuk filter pembayaran berdasarkan minggu
    public function scopeFilterByWeek($query, $year, $week)
    {
        return $query->whereYear('payment_date', $year)
                     ->whereRaw('WEEK(payment_date, 1) = ?', [$week]); // Menggunakan mode minggu ISO-8601
    }
}
