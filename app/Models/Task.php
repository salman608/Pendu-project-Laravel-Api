<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Task Type
    public const TASK_SIMPLE       = 'Simple';
    public const TASK_QUOTE        = 'Quote';
    
    // Task Request Status
    public const  REQUEST_RECEIVED        = 'Received';
    public const  REQUEST_REVIEW          = 'Review';
    public const  REQUEST_ONLINE          = 'Online';
    public const  REQUEST_PROCESSING      = 'Processing';
    public const  REQUEST_ACCEPTED        = 'Accepted';
    public const  REQUEST_COMPLETED       = 'Completed';



    protected $table = 'tasks';

    protected $guarded = [];

    protected $appends = ['image_url'];

    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category_task', 'task_id', 'product_category_id');
    }

    public function products(){
        return $this->hasMany(TaskProduct::class);
    }

    public function offers(){
        return $this->hasMany(TaskOffer::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
    public function acceptedOffer(){
        return $this->belongsTo(TaskOffer::class,'offer_id');
    }
    public function order(){
        return $this->hasOne(TaskOrder::class);
    }

    public function serviceCategory(){
        return $this->belongsTo(ServiceCategory::class);
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
