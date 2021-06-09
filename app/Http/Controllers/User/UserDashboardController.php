<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Dropper;
use App\Models\Task;
use Auth;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   

        $data = [];
        $data['tasks'] = Task::with('products')->where('user_id', auth()->id())->latest()->get()
            ->groupBy(function($task){ 
                return $task->created_at->format('j F Y'); 
            });

        // return $data['tasks']->toArray();

        return view('user.profile.tasks', $data);
    }

    public function profile()
    {
        return view('User.Profile.profile');
    }

    // Currently index
    public function tasks()
    {       
        return "Currently index";
        return auth()->user();
        //return view('User.Profile.tasks');
    }



}
