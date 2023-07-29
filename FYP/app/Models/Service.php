<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'description',
        'picture',
        'seeker',
        'provider',
        'status',
        'address',
    ];

    public function seeker()
    {
        return $this->belongsTo(User::class, 'seeker');
    }

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider');
    }

    public function images(){

        return $this->hasMany('App\Models\service_images','service','id');
   }

}
