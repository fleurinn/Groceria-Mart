<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',     
        'user_id',
        'transaction_id',  
        'total_price',
        'payment_method',
        'shipping_address',
        'status',          
        'payment_id',      
        'payment_status',  
        'total_amount',    
        'invoice_path',    
        'payment_date',    
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];

    public $timestamps = true;

    /**
     * Status yang diperbolehkan
     */
    public const STATUS_OPTIONS = ['pending', 'paid', 'shipped', 'delivered', 'cancelled'];
    public const PAYMENT_STATUS_OPTIONS = ['menunggu', 'konfirmasi', 'belum dibayar', 'dibayar'];

    /**
     * Boot method untuk model
     * Mengisi order_number secara otomatis jika kosong
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($checkout) {
            if (empty($checkout->order_number)) {
                $checkout->order_number = 'CHK-' . strtoupper(uniqid());
            }
        });
    }

    /**
     * Relasi ke User (pembeli)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Transaksi
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Relasi ke Pembayaran
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    /**
     * Relasi ke Produk (banyak produk dalam satu transaksi)
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'checkout_products', 'checkout_id', 'product_id')
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }

    /**
     * Scope untuk filter berdasarkan tahun
     */
    public function scopeFilterByYear($query, $year)
    {
        return $query->whereYear('payment_date', $year);
    }

    /**
     * Scope untuk filter berdasarkan bulan
     */
    public function scopeFilterByMonth($query, $year, $month)
    {
        return $query->whereYear('payment_date', $year)->whereMonth('payment_date', $month);
    }

    /**
     * Scope untuk filter berdasarkan minggu
     */
    public function scopeFilterByWeek($query, $year, $week)
    {
        return $query->whereYear('payment_date', $year)
                     ->whereRaw('WEEK(payment_date, 1) = ?', [$week]); 
    }

    /**
     * Scope untuk filter berdasarkan status checkout
     */
    public function scopeFilterByStatus($query, $status)
    {
        return in_array($status, self::STATUS_OPTIONS) ? $query->where('status', $status) : $query;
    }

    /**
     * Scope untuk filter berdasarkan status pembayaran
     */
    public function scopeFilterByPaymentStatus($query, $paymentStatus)
    {
        return in_array($paymentStatus, self::PAYMENT_STATUS_OPTIONS) ? $query->where('payment_status', $paymentStatus) : $query;
    }

    /**
     * Scope untuk mendapatkan transaksi terbaru
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Mutator untuk memastikan status valid sebelum disimpan
     */
    protected function status(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => in_array($value, self::STATUS_OPTIONS) ? $value : 'pending'
        );
    }

    /**
     * Mutator untuk memastikan payment_status valid sebelum disimpan
     */
    protected function paymentStatus(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => in_array($value, self::PAYMENT_STATUS_OPTIONS) ? $value : 'menunggu'
        );
    }
}
