<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function getIconAttribute($value)
    {
        return url('/frontend/assets/images/Icons').'/'.$value;
    }
}
