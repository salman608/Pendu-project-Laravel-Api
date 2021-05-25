<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    //=========Admin tag list ========
    public function index(){
        return view('admin.pages.tag.index');
    }

    //=========Admin tag create ========
    public function create(){
        return view('admin.pages.tag.create');
    }

    //=========Admin tag store ========
    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255',

          ]);
          $tag=new Tag();
          $tag->name=$request->name;
          $tag->slug=Str::slug($request->name);
          $tag->save();
          return back();
    }

    //=========Admin tag edit ========
    public function edit(){
        return view('admin.pages.tag.edit');
    }

    //=========Admin tag update ========
    public function update(Request $request, $tag_id){
        $tag=Tag::FindOrFail($tag_id);
        $tag->name=$request->name;
        $tag->slug=Str::slug($request->name);
        $tag->save();
        return redirect()->route('pro_tag.list');
    }

    //=========Admin tag delete ========
    public function delete($tag_id){
     $tag=Tag::FindOrFail($tag_id);
     $tag->destroy();
     return back();
    }




}
