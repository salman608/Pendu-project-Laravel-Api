<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function allPost(){
        $posts     = Post::inRandomOrder()->where('status', 1)->latest()->take(1)->get();
        $side_post = Post::inRandomOrder()->where('status', 1)->latest()->take(3)->get();
        $all_post = Post::where('status', 1)->latest()->paginate(1);
        return view('frontend.post.all_post',compact('posts','side_post','all_post'));
    }

    public function singlePost($post){
        $header_post = Post::inRandomOrder()->simplePaginate(1);
        $single_post = Post::where('status', 1)->where('id', $post)->first();
        return view('frontend.post.single_post',compact('header_post','single_post'));
    }
}
