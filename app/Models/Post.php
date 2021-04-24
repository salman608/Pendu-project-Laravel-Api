<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
      'title',
      'slug',
      'category_id',
      'tegs',
      'featured_image',
      'body',
      'posted_by',
      'like',
      'dislike',
      'status',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}