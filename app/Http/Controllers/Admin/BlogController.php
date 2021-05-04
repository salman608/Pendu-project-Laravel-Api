<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\ProductCat;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Task;
use Image;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    //========Amin Post list==========
    public function index(){
       return view('admin.pages.blog.index');
    }

    //========Amin Post create==========
    public function create(){
        return view('admin.pages.blog.create');
    }

    //========Amin Post store==========
    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'featured_image' => 'required',
            'body' => 'required',
            'pcat_id' => 'required',
            'tag_id' => 'required',
            ]);

        $pro_image = $request->file('featured_image');
        $name_gen=hexdec(uniqid()).'.'.$pro_image->getClientOriginalExtension();
        Image::make($pro_image)->resize(270,270)->save('upload/blog/'.$name_gen);
        $product_image = 'upload/blog/'.$name_gen;

        $blogs=new Post();
        $blogs->title=$request->title;
        $blogs->slug=Str::slug($request->title);
        $blogs->body=$request->body;
        $blogs->pro_image=$product_image;
        $blogs->save();

        $blogs->proCategories()->attach($request->proCategories);
        $blogs->tags()->attach($request->tags);
        return redirect()->route('post.list');


    }

    //========Amin Post edit==========
    public function edit(){
        return view('admin.pages.blog.edit');
    }

    //========Amin Post update==========
    public function update(Request $request, $post_id){

        $this->validate($request,[
            'title' => 'required',
            'featured_image' => 'required',
            'body' => 'required',
            'pcat_id' => 'required',
            'tag_id' => 'required',
            ]);

        $blogs=Post::findOrFail($post_id);

        $pro_image = $request->file('featured_image');
        $name_gen=hexdec(uniqid()).'.'.$pro_image->getClientOriginalExtension();
        Image::make($pro_image)->resize(270,270)->save('upload/blog/'.$name_gen);
        $product_image = 'upload/blog/'.$name_gen;


        $blogs->title=$request->title;
        $blogs->slug=Str::slug($request->title);
        $blogs->body=$request->body;
        $blogs->pro_image=$product_image;
        $blogs->save();

        $blogs->proCategories()->attach($request->proCategories);
        $blogs->tags()->attach($request->tags);
        return redirect()->route('post.list');
    }

    //========Amin Post delete==========
    public function delete($post_id){
      $blogs=Post::findOrFail($post_id);
      $blogs->delete();
      return back();
    }

    //========Amin Post active==========
    public function active(){

    }

    //========Amin Post inactive==========
    public function inactive(){

    }
}
