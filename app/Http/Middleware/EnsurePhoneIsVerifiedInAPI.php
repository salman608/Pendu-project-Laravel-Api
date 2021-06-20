<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


class EnsurePhoneIsVerifiedInAPI
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {  
        if (! auth('api')->user()->hasVerifiedPhone()) {

            return response()->json([
                'status' => 403,
                'message' => 'Your phone address is not verified.',
                'error' =>[]
            ], 403);
        } 
        
        return $next($request);
    }
}
