<?php

use App\Http\Controllers\Api\V1\Others\ServiceCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\V1\Others\CouponController;
use App\Http\Controllers\Api\V1\Others\PostController;
use App\Http\Controllers\Api\V1\Others\ProductCategoryController;
use \App\Http\Controllers\Api\V1\Others\DeliveryTimeController;
use \App\Http\Controllers\Api\V1\Others\VehicleController;
use \App\Http\Controllers\Api\V1\User\Auth\AuthController;
use \App\Http\Controllers\Api\V1\Dropper\Auth\DropperAuthController;
use App\Http\Controllers\Api\V1\Dropper\DropperTaskController;
use App\Http\Controllers\Api\V1\User\AppController;
use App\Http\Controllers\Api\V1\User\Auth\OTPController;
use App\Http\Controllers\Api\V1\User\Auth\ResetPasswordController;
use App\Http\Controllers\Api\V1\User\TaskOrderController;
use App\Http\Controllers\Api\V1\User\TaskController;
use App\Http\Controllers\ApiController;
use App\Models\Task;
use App\Models\TaskOffer;

// use App\Http\Controllers\DropperAuthController;


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
    'prefix' => 'v1/auth'
], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/password/email', [ResetPasswordController::class, 'index']);
    Route::post('/password/confirm', [ResetPasswordController::class, 'confirm']);
    Route::put('/password/reset', [ResetPasswordController::class, 'reset']);
    // Route::post('/update/{id}', [AuthController::class, 'update']);

    Route::post('/verify-phone', [OTPController::class, 'verifyPhone']);
});

Route::group([
    'prefix' => 'v1/auth',
    "middleware" => 'phone-verified-api'

], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::put('/refresh', [AuthController::class, 'refresh']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::put('/profile', [AuthController::class, 'update']);
    // Route::post('/update/{id}', [AuthController::class, 'update']);

});

// Route::prefix('v1')->name('v1.')->group(function () {
Route::prefix('v1')->group(function () {
	Route::get('/ping', [ApiController::class, 'ping']);
    Route::get('/me', [ApiController::class, 'me']);

    Route::fallback(function () {
        return response()->json([
            'status'=> 404,
            'message' => 'Route does not exist'
        ], 404);
    });

});


Route::prefix('v1')->middleware(['jwt.verify', 'phone-verified-api'])->group(function () {
	Route::post('/tasks', [TaskController::class, 'store']);

    Route::get('/tasks/{taskId}/offers', function($taskId){

       $task_offers = TaskOffer::where('task_id',$taskId)->get();
        return $task_offers;
    });




  

    Route::post('/tasks/{taskId}/offers/{offerId}/checkout',[TaskOrderController::class, 'store']);
    Route::post('/task-order/{taskOrderId}/review',[TaskOrderController::class, 'storeReview']);
    Route::post('/task-order/{taskOrderId}/tips',[TaskOrderController::class, 'storeTips']);





    Route::get('/product-categories', [ProductCategoryController::class, 'index']);
    Route::get('/service-categories', [ServiceCategoryController::class, 'index']);


    Route::get('/vehicles', [VehicleController::class, 'index']);
    Route::get('/delivery-times', [DeliveryTimeController::class, 'index']);

    Route::get('/coupons/', [CouponController::class, 'index']);
    Route::get('/coupons/{id}', [CouponController::class, 'show']);




        

    Route::get('posts', [PostController::class, 'index']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
    Route::post('posts', [PostController::class, 'store']);
    
    Route::get('/app-permission', [ AppController::class, 'appPermission']);
    Route::post('/app-permission/{id}', [ AppController::class, 'updateAppPermission']);
    

    Route::get('/tasks/{taskId}/offers/{offerId}', function($taskId){
        // return "Offer accepted";

        return response()->json([
            'status' => 200,
            'message' => "Offer accepted",
            'data' => Task::find($taskId)
        ]);

    });
});

/**
 * Dropper Routes
 */
Route::group([
    'prefix' => 'v1/dropper'

], function ($router) {
    Route::post('/login', [DropperAuthController::class, 'login']);
    Route::post('/register', [DropperAuthController::class, 'register']);
    Route::post('/logout', [DropperAuthController::class, 'logout']);
    Route::post('/refresh', [DropperAuthController::class, 'refresh']);
    Route::get('/profile', [DropperAuthController::class, 'profile']);


    // Task Submit Offer
    Route::post('/tasks/{taskId}/submit-offer', [DropperTaskController::class, 'submitOffer']);

});


// =======Dropper Route Section=========

// Route::group([
//     // 'middleware' => 'dropper',
//     'prefix' => 'driver'

// ], function ($router) {
//     Route::post('/login', [DropperAuthController::class, 'login']);
//     Route::post('/register', [DropperAuthController::class, 'register']);
//     Route::post('/logout', [DropperAuthController::class, 'logout']);
//     Route::post('/refresh', [DropperAuthController::class, 'refresh']);
//     Route::get('/dropper-profile', [DropperAuthController::class, 'dropperProfile']);
// });


// // ======== Admin Route  service Category(shop & drop ...) =====
// Route::get('/category-list', [ServiceCategoryController::class, 'getaAllCat'])->name('category.getaAllCat');





