<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];

    // public function tags(){
    //     return $this->hasMany(Tag::class);
    //   }

    //   public function proCategories(){
    //     return $this->hasMany(ProductCat::class);
    //   }
}
