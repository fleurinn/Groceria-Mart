<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function shippingAddresses()
    {
        return $this->hasMany(ShippingAddress::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }

}

