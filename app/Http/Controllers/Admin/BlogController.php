<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class BlogController extends Controller
{
    public function postList()
    {
        return view('admin.pages.blog.post');
    }

    public function categoryList()
    {
        return view('admin.pages.blog.category');
    }

    public function tagList()
    {
        return view('admin.pages.blog.tag');
    }
}
