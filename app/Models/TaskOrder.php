<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskOrder extends Model
{
    use HasFactory;

    public const STATUS_ASSIGNED       = 'Assigned';
    public const STATUS_IN_PROGRESS    = 'In Progress';
    public const STATUS_COLLECTED      = 'Collected';
    public const STATUS_DELIVERED      = 'Delivered';

    protected $guarded = [];


    public function transaction(){
        return $this->hasOne(TaskOrderTransaction::class);
    }

    public function task(){
        return $this->belongsTo(Task::class);
    }

    public function taskOffer(){
        return $this->belongsTo(TaskOffer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function review(){
        return $this->hasOne(TaskOrderReview::class);
    }
}
