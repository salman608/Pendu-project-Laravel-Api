<?php

use App\Http\Controllers\Admin\ServiceCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Api\V1\Admin\ProductCategoryController;
use \App\Http\Controllers\Api\V1\Admin\DeliveryTimeController;
use App\Http\Controllers\Admin\VehicleController;
use \App\Http\Controllers\Api\V1\User\Auth\AuthController;
use \App\Http\Controllers\Api\V1\Dropper\Auth\DropperAuthController;
use App\Http\Controllers\Api\V1\Dropper\DropperTaskController;
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
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/profile', [AuthController::class, 'profile']);
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


Route::prefix('v1')->middleware('jwt.verify')->group(function () {
	Route::post('/tasks/create', [TaskController::class, 'store']);

    Route::get('/tasks/{taskId}/offers', function($taskId){

       $task_offers = TaskOffer::where('task_id',$taskId)->get();
        return $task_offers;
    });
    Route::get('/tasks/{taskId}/offers/{offerId}', function($taskId){
        // return "Offer accepted";

        return response()->json([
            'status' => 200,
            'message' => "Offer accepted",
            'data' => Task::find($taskId)
        ]);

    });
    Route::post('/tasks/{taskId}/offers/{offerId}/checkout',[TaskOrderController::class, 'store']);
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

// ======== Admin Route  service Category(shop & drop ...) =====
Route::get('/categories', [ServiceCategoryController::class, 'getaAllCat'])->name('category.getaAllCat');


// ======== Admin Route Coupon submit Api=====
Route::post('/submit-coupon', [CouponController::class, 'getCoupon'])->name('getCoupon');

// ======== Admin Route Product category api=====
Route::get('/productcats', [ProductCategoryController::class, 'proCatList'])->name('pro_cat.catList');

// ======== Admin Route Vehicle type api=====
Route::get('/vehicles', [VehicleController::class, 'getAllVehicle'])->name('vehicle.getAll');

//========= Admin dalivery Time api=========
Route::get('datetimes', [DeliveryTimeController::class, 'getDeliveryTime'])->name('dtime.getList');

Route::post('posts', [PostController::class, 'store']);
Route::get('posts', [PostController::class, 'list']);
Route::get('/posts/{post}', [PostController::class, 'show']);
