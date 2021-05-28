<?php

namespace App\Http\Controllers;

use App\Models\DeliveryTime;
use App\Models\Post;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product_cats=ProductCategory::all();
        $delivery_times=DeliveryTime::all();
        $posts=Post::latest()->take(3)->get();
        return view('home',compact('posts','product_cats','delivery_times'));
    }



}
