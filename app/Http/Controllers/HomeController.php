<?php

namespace App\Http\Controllers;

use App\Models\DeliveryTime;
use App\Models\Post;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

use Session;
use Stripe;
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

    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100*100,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of Pendu Service",
        ]);
   
        Session::flash('success', 'Payment Successful !');
           
        return back();
    }


}
