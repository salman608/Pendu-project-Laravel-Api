<?php

namespace App\Http\Controllers\Api\V1\Others;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends ApiController
{
    public function __construct() {

    }
    public function index(){

        return $this->respondWithSuccess(
            'Blog posts are retrieved',
            Post::all()
        );
     }

    public function show($post){
        $post=Post::find($post);
        return $this->respondWithSuccess(
            'Blog single post is retrieved',
            $post
        );
    }
}
