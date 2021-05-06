<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Dropper;
use Auth;

class UserDashboardController extends Controller
{
    public function index()
    {   
        return auth();
        // $droppers = Dropper::get();
        // $posts    = Post::inRandomOrder()->where('status', 1)->latest()->take(3)->get();

        // return view('home', compact('droppers', 'posts'));
    }

    public function index1()
    {
        return "hi i am user";
    }
}
