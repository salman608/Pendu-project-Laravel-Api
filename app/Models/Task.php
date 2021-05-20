<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $guarded = [];

    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category_task', 'task_id', 'product_category_id');
    }

    public function products(){
        return $this->hasMany(TaskProducts::class);
    }
}
