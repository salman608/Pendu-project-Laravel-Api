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
    public const STATUS_COMPLETED    = 'Completed';

    protected $guarded = [];
}
