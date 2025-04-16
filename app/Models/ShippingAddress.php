<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import class BelongsTo

class ShippingAddress extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'no_telp',
        'city_id',
        'district_id',
        'village_id',
        'address',
        'detail',
        'is_default',
    ];

    /**
     * Get the user that owns the shipping address.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the city associated with the shipping address.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get the district associated with the shipping address.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function districts(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    /**
     * Get the village associated with the shipping address.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class);
    }
}