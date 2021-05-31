<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropperGroup extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get Perks of Dropper Status
     */
    public function perkStatus()
    {
        return $this->hasMany(DropperGroupStatus::class);
    }

    public function rules()
    {
        return $this->hasMany(DropperGroupRule::class);
    }
}
