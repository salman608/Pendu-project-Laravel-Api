<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\role;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'referrer_id',
        'email',
        'suburb',
        'phone',
        'profile_photo',
        'role_id',
        'password',
        'balance',
        'phone_verified_at'
    ];

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

    public function role(){
        return $this->belongsTo(role::class);
      }

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    /**
     * A user has many referrals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }


    /**
     * A user has many tasks.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class)->groupBy('created_at');
    }

    public function appliedCoupons()
    {
        return $this->belongsToMany(Coupon::class);
    }


    public function getProfilePhotoAttribute($value)
    {   
        // if(is_null($value) || $value){  
        //     return url('uploads/user.png');
        // }
        return url('uploads/user/photos/').'/'.$value;  
    }

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

  protected $appends = ['referral_link'];

/**
 * Get the user's referral link.
 *
 * @return string
 */
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->id,mt_rand(1000,9999)]);
    }


    public function hasVerifiedPhone()
    {
        return ! is_null($this->phone_verified_at);
    }

}
