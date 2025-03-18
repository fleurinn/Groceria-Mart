<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'description', 'status'];

    // Relasi dengan produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Menggunakan slug sebagai route model binding
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Cek apakah kategori dalam status publik
    public function isPublished()
    {
        return $this->status === 'Aktif'; // Menggunakan 'Aktif' sesuai dengan migration
    }
}
