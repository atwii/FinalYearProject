<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanitaryware extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'picture',
        'description',
        'color',
        'price_retail',
        'price_wholesale',
        'size',
        'quantity',
        'origin',
    ];
}
