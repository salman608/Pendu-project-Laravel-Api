<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CouponController;

use \App\Http\Controllers\AuthController;
use App\Http\Controllers\DropperAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// =========User route Controller==========

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});


// =======Dropper Route Section=========

Route::group([
    // 'middleware' => 'dropper',
    'prefix' => 'driver'

], function ($router) {
    Route::post('/login', [DropperAuthController::class, 'login']);
    Route::post('/register', [DropperAuthController::class, 'register']);
    Route::post('/logout', [DropperAuthController::class, 'logout']);
    Route::post('/refresh', [DropperAuthController::class, 'refresh']);
    Route::get('/dropper-profile', [DropperAuthController::class, 'dropperProfile']);
});


// ======== Admin Route Coupon=====
Route::post('/submit-coupon', [CouponController::class, 'getCoupon'])->name('getCoupon');
