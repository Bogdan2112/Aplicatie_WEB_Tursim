<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'country',
        'price',
        'description',
        'image',
        'available',
        'date_start',
        'date_end'
    ];

    protected $casts = [
        'available' => 'boolean',
        'date_start' => 'date',
        'date_end' => 'date',
        'price' => 'decimal:2'
    ];
}
