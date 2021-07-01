<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskProduct extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function delivery(){
        return $this->hasOne(TaskProductDelivery::class);
    }
}
