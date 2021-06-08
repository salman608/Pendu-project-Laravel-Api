<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Task Type
    public const TASK_SIMPLE       = 'simple';
    public const TASK_QUOTE        = 'quote';
    
    // Task Request Status
    public const  REQUEST_RECEIVED        = 'received';
    public const  REQUEST_REVIEW          = 'review';
    public const  REQUEST_ONLINE          = 'online';
    public const  REQUEST_PROCESSING      = 'processing';
    public const  REQUEST_COMPLETED       = 'completed';



    protected $table = 'tasks';

    protected $guarded = [];

    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category_task', 'task_id', 'product_category_id');
    }

    public function products(){
        return $this->hasMany(TaskProducts::class);
    }

    public function offers(){
        return $this->hasMany(TaskOffer::class);
    }
    
    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
    public function deliveryTime(){
        return $this->belongsTo(DeliveryTime::class);
    }


    public function getImageUrlAttribute($value){
    	$imageUrl = "";
    	if(! is_null($this->image)){

    		$imagePath = public_path()."/uploads/images/tasks/".$this->image;
    		if(file_exists($imagePath)) $imageUrl = asset("uploads/images/tasks/". $this->image);
    	}
    	return $imageUrl;
    }

}
