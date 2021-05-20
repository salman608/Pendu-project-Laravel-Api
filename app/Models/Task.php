<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'order_no',
        'user_id',
        'category_id',
        'vehicle_type',
        'title',
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
        'created_at',
        'updated_at',
    ];

    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category_task', 'task_id', 'product_category_id');
    }

    public function products(){
        return $this->hasMany(TaskProducts::class);
    }
}
