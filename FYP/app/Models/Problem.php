<?php

namespace App\Models;
use App\Models\User;
use App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Problem extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'order',
        'client',
        'description',
        'picture',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class);
    }
}
