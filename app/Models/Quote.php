<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories',
        'product',
        'product_cost',
        'pick_address',
        'delivery_address',
        'delivery_fee',
        'driver_id',
        'status',
    ];
}
