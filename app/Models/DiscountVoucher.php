<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class DiscountVoucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type', // global atau specific_product
        'category_product_id', // sesuai dengan migration
        'discount_code',
        'discount_value',
        'discount_type', // nominal atau percentage
        'start_date',
        'end_date',
        'status',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    /**
     * Relasi ke kategori produk (jika ada)
     */
    public function categoryProduct()
    {
        return $this->belongsTo(CategoryProduct::class);
    }

    /**
     * Cek apakah diskon masih valid
     */
    public function isValid()
    {
        return now()->between($this->start_date, $this->end_date);
    }

    /**
     * Format nilai diskon berdasarkan tipe (nominal atau persentase)
     */
    public function getFormattedDiscount()
    {
        return $this->discount_type === 'percentage' 
            ? $this->discount_value . '%' 
            : 'Rp ' . number_format($this->discount_value, 0, ',', '.');
    }
}
