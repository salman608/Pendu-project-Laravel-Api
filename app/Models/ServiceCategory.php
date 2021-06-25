<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function droppers(){
        return $this->belongsToMany(Dropper::class);
    }

    public function getIconAttribute($value)
    {
        if ($value) {
            return asset('images/profile/' . $value);
        } else {
            return asset('images/profile/no-image.png');
        }
    }
}
