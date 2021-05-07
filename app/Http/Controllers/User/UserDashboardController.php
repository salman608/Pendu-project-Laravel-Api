<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Dropper;
use Auth;

class UserDashboardController extends Controller
{   
    public function __construct()
    {   
        $this->middleware('auth');
    }
    public function index()
    {   
        return 'Masud Rana';
    }

    public function index1()
    {
        return "hi i am user";
    }
}
