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
        'start_date',
        'end_date',
        'status',
        'image',
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
        $now = now(); // Ambil waktu sekarang
        return $this->start_date <= $now       // Tanggal mulai sudah lewat atau sekarang
            && $this->end_date >= $now         // Tanggal akhir belum lewat
            && $this->status === 'publish';    // Status voucher harus 'publish'
    }

    /**
     * Scope untuk voucher yang sudah kedaluwarsa dan masih publish
     */
    public function scopeExpiredButPublished($query)
    {
        return $query->where('end_date', '<', now())->where('status', 'publish');
    }

    /**
     * Format nilai diskon berdasarkan tipe (nominal atau persentase)
     */
        public function getFormattedDiscount()
    {
        return 'Rp ' . number_format($this->discount_value, 0, ',', '.');
    }
}
