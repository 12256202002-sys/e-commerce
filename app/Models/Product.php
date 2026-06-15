<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'price',
        'weight',
        'image',
        'badge',
        'rating',
        'reviews_count',
        'is_active',
    ];

    protected $casts = [
        'price' => 'integer',
        'rating' => 'float',
        'reviews_count' => 'integer',
        'is_active' => 'boolean',
    ];

    /**
     * Get formatted price in Rupiah
     */
    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
