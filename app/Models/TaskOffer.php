<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskOffer extends Model
{
    use HasFactory;

    public const STATUS_PENDING      = 'Pending';
    public const STATUS_CONFIRMED    = 'Confirmed';
    public const STATUS_IN_PROGRESS  = 'In Progress';
    public const STATUS_STARTED      = 'Started';
    public const STATUS_SHOP_COMPLETED = 'Shop Completed';
    public const STATUS_DELIVERED    = 'Delivered';
    public const STATUS_COMPLETED    = 'Completed';

    protected $guarded = [];

    public function dropper(){
        return $this->belongsTo(Dropper::class);
    }

    public function task(){
        return $this->belongsTo(Task::class);
    }

    public function order(){
        return $this->hasOne(TaskOrder::class, 'task_offer_id');
    }
}
