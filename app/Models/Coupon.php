<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = [
        'started_at','expired_at'
    ];


    public function appliedCoupons(){
        return $this->belongsToMany(User::class);
    }

}
