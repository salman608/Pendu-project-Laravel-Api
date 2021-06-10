<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Dropper extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'abn',
        'vehicle_id',
        'license_front',
        'license_back',
        'profile_image',
    ];

    protected $appends = ['full_name'];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }

    public function services(){
        return $this->belongsToMany(ServiceCategory::class);
    }

    public function level()
    {
        return $this->belongsTo(DropperGroup::class, 'dropper_group_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    // profile_image
    // url('/uploads/dropper/photos').'/'.$value;
    public function getProfileImageAttribute($value)
    {   
        if ($value) {
            // return asset('images/profile/' . $value);
            var_dump('Call Masud');
            die();

        } else {
            return url('/uploads/dropper/photos/user.svg');
        }
    }

    public function getFullNameAttribute($value)
    {   
        return $this->first_name.' '.$this->last_name;
    }


}
