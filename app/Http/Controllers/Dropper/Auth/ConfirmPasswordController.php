<?php

namespace App\Http\Controllers\Dropper\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Support\Facades\Auth;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        if (Auth::check() && Auth::user()->role->id==1) {
            $this->redirectTo=route('admin.dashboard');
        }elseif(Auth::check() && Auth::user()->role->id==2) {
            $this->redirectTo=route('user.dashboard');
        }elseif(Auth::check() && Auth::user()->role->id==3) {
            $this->redirectTo=route('driver.dashboard');
        }

        $this->middleware('auth');
    }
}
