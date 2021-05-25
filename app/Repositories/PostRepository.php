<?php

namespace App\Repositories;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Support\Str;


class PostRepository
{
    public function __construct()
    {
        # code...
    }

    public static function list()
    {
        return Post::all();
    }

    // public static function store($newcoupon)
    // {
    //     try {
    //         $coupon = new Coupon($newcoupon);
    //         $coupon->save();

    //         return $coupon;
    //     } catch (QueryException $exception) {
    //         throw new InvalidArgumentException($exception->getMessage());
    //     }
    // }

    public static function savePostData($data){
        $post                        = new Post();
        $post->title                 = $data['title'];
        $post->body                  = $data['body'];
        $post->service_category_id   = $data['service_category_id'];

        // if(!empty($data['service_id'])){
        //     $post->service_id   = $data['service_id'];
        // }

        if(!empty($data['featured_image'])){
            $post->featured_image   = $data['featured_image'];
        }

        $post->save();

        return $post;
    }

    // public static function singlePost($id)
    // {
    //     return Post::findOrFail($id);
    // }


}
