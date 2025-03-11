<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_id',
        'payment_status',
        'payment_date',
    ];

    // Relasi ke User (Setiap pembayaran memiliki satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Transaction (Setiap pembayaran terkait dengan satu transaksi)
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
