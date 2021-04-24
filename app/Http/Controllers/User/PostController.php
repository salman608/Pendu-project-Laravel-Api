<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post     = Post::inRandomOrder()->where('status', 1)->latest()->take(1)->get();
        $all_post = Post::inRandomOrder()->where('status', 1)->latest()->take(3)->get();
        return view('User.Post.all_post', compact('all_post', 'post'));
    }
    // $all_post=Post::where('status',1)->latest()->get();
    // return view('User.Blog.all_blog',compact('all_post'));
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        POST::create($req->all());

        Session::flash('insert', 'Post Sucessfully...');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $header_post = Post::inRandomOrder()->where('published', 1)->simplePaginate(1);
        $single_post = Post::where('status', 1)->where('id', $id)->first();
        return view('User.Post.SinglePost', compact('single_post', 'header_post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function how_it_work()
    {
        return view('User.how_it_works');
    }
}
