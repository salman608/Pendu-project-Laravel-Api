<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded=[];


    // protected $appends = ['icon'];

    public function getIconAttribute($value)
    {
        return asset('/frontend/assets/images/Icons/'.$value);
    }
}
