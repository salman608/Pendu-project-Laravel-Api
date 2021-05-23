<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Service;
use App\Repositories\PostRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Image;
use Illuminate\Support\Str;
use Validator;


class PostController extends Controller
{
    public function __construct() {

    }
    //========Amin Post list==========
    public function index(){
       return view('admin.pages.blog.index');
    }

    public function list(){
        return response()->json(Post::all(),200);
     }

    //========Amin Post create==========
    // public function create(){
    //     return view('admin.pages.blog.create');
    // }

    //========Amin Post store==========
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title'              => 'required|max:255',
            'body'               => 'required|max:255',
            'service_category_id'=> 'required',
            'featured_image'     => 'required',
        ]);




        DB::beginTransaction();
        try {
            $data = $validator->validated();

             // image upload
             if ($file = $request->file('featured_image')) {

                $name = Str::random(5).date('mdYHis').uniqid() .'.' . $file->getClientOriginalExtension();
                Image::make($file)->resize(270,270)->save('uploads/images/posts/'.$name);
                $data['featured_image'] = $name;
            }

            $post = PostRepository::savePostData($data);
            DB::commit();

            return response()->json([
                'message' => 'Post Create successfully',
                'code' => 200,
                'error' => false,
                'results' => $post
            ], 201);
            // return response()->json($post, 200);

        } catch (Exception $e) {
            DB::rollBack();

            if(!empty($data['featured_image']) && file_exists('uploads/images/posts/'.$data['featured_image'])){
				unlink('uploads/images/posts/'.$data['featured_image']);
			}

            Log::info($e->getMessage());

            return response()->json([
                'message' => $e->getMessage(),
                'error' => true,
                'code' => 500
            ], 500);

    }
}


    //========Amin Post edit==========
    // public function edit(){
    //     return view('admin.pages.blog.edit');
    // }

    //========Amin Post update==========


    //========Amin Post active==========
    // public function active(){

    // }

    //========Amin Post inactive==========
    // public function inactive(){

    // }

    public function show($post){
        $post=Post::find($post);
        return response()->json($post,200);
        //  return response()->json(Post::get(),200);

    }
}
