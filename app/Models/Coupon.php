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
    protected $appends = ['valid_range', 'valid_range_year'];

    // {{$offer->started_at->format('j M')}}-{{$offer->expired_at->format('j M')}}
    
    public function getValidRangeAttribute()
    {
        
        // {{-- isoFormat('MMM Do YY')  --}}
        // {{-- ->format('j F') --}}
        return $this->started_at->format('j M')." - ". $this->expired_at->format('j M');
    }

    public function getValidRangeYearAttribute()
    {
        return $this->started_at->format('j M')." - ". $this->expired_at->format('j M Y');
    }

    public function appliedCoupons(){
        return $this->belongsToMany(User::class);
    }

    public function info(){
        return $this->hasMany(CouponInfo::class);
    }

}
