<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'order_no',
        'category_id',
        'vahicle_type',
        'title',
        'product_id',
        'additional_note',
        'product_cost',
        'shop_address',
        'delivery_address',
        'delivery_time',
        'total_products',
        'item_cost',
        'task_image',
        'status',
        'accepted_by',
        'created_by',
        'created_at',
        'updated_at',
    ];
}
