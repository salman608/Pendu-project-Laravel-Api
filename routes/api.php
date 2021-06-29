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
use App\Http\Controllers\Api\V1\User\AppHomeController;
use App\Http\Controllers\Api\V1\User\Auth\OTPController;
use App\Http\Controllers\Api\V1\User\Auth\ResetPasswordController;
use App\Http\Controllers\Api\V1\User\ReferralController;
use App\Http\Controllers\Api\V1\User\TaskCheckoutController;
use App\Http\Controllers\Api\V1\User\TaskController;
use App\Http\Controllers\Api\V1\User\TaskOfferController;
use App\Http\Controllers\Api\V1\User\TaskReviewController;
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

});

Route::group([
    'prefix' => 'v1/auth',
    "middleware" => ['jwt.verify']
    
], function () {
    Route::post('/verify-phone', [OTPController::class, 'verifyPhone']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::put('/refresh', [AuthController::class, 'refresh']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::put('/profile', [AuthController::class, 'update']);

    Route::put('/profile-image', [AuthController::class, 'changeProfileImage']);
    // Route::post('/update/{id}', [AuthController::class, 'update']);

    
    Route::get('/tasks/in-progress', [TaskController::class, 'taskInProgress']);
    Route::get('/tasks/pending', [TaskController::class, 'taskInPending']);
    Route::get('/tasks/history', [TaskController::class, 'taskHistory']);
    Route::get('/tasks/deliveries', [TaskController::class, 'taskDelivery']);
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
	
    // Get all pro drivers
    Route::get('/pro-drivers', [AppHomeController::class, 'proDriver']);

    // Store task request
    Route::post('/tasks', [TaskController::class, 'store']);

    // Get task offers
    Route::get('/tasks/{taskId}/offers',  [TaskOfferController::class, 'index']);
    
    // Get Checkout Page List of offers details 
    Route::get('/task-checkout/{taskId}/offer/{offerId}',[TaskCheckoutController::class, 'index']);

    // Apply Coupon
    Route::post('/task-checkout/coupon/{couponCode}',[TaskCheckoutController::class, 'applyCoupon']);

    // Submit for checkout
    Route::post('/task-checkout/{taskId}/offer/{offerId}',[TaskCheckoutController::class, 'checkOutProcess']);

    // Store review  for as a task order
    Route::post('/task-order/{taskOrderId}/review',[TaskReviewController::class, 'reviewSubmit']);

    // Store Tips for as a task order
    Route::post('/task-order/{taskOrderId}/tips',[TaskReviewController::class, 'storeTips']);


    // Refer and Earn
    Route::post('refer-n-earn', [ReferralController::class, 'store']);


    // Route::get('payment/coupon/{coupon}', [App\Http\Controllers\User\CheckOutController::class, 'applyCoupon'])->name('apply-coupon');

    // Route::get('payment/{offerId}/task/{taskId}', [App\Http\Controllers\User\CheckOutController::class, 'index'])->name('payment');

    // Route::post('payment/{offerId}/task/{taskId}', [App\Http\Controllers\User\CheckOutController::class, 'checkOutProcess'])->name('payment-process');






    Route::get('/product-categories', [ProductCategoryController::class, 'index']);
    Route::get('/service-categories', [ServiceCategoryController::class, 'index']);


    Route::get('/vehicles', [VehicleController::class, 'index']);
    Route::get('/delivery-times', [DeliveryTimeController::class, 'index']);

    Route::get('/coupons', [CouponController::class, 'index']);
    Route::get('/coupons/{id}', [CouponController::class, 'show']);




        

    Route::get('posts', [PostController::class, 'index']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
    Route::post('posts', [PostController::class, 'store']);
    
    Route::get('/app-permission', [ AppController::class, 'appPermission']);
    Route::post('/app-permission/{id}', [ AppController::class, 'updateAppPermission']);
    

});



/**
 * Dropper Routes
 */
Route::group([
    'prefix' => 'v1/dropper'

], function ($router) {
    Route::post('/login', [DropperAuthController::class, 'login']);
    Route::post('/register', [DropperAuthController::class, 'register']);



    Route::post('/password/email', [App\Http\Controllers\Api\V1\Dropper\Auth\ResetPasswordController::class, 'index']);
    Route::post('/password/confirm', [App\Http\Controllers\Api\V1\Dropper\Auth\ResetPasswordController::class, 'confirm']);
    Route::put('/password/reset', [App\Http\Controllers\Api\V1\Dropper\Auth\ResetPasswordController::class, 'reset']);

});


Route::prefix('v1/dropper')->middleware('jwt.verify')->group(function () {

    
    Route::post('/logout', [DropperAuthController::class, 'logout']);
    Route::post('/refresh', [DropperAuthController::class, 'refresh']);
    Route::get('/profile', [DropperAuthController::class, 'profile']);
    Route::put('/profile', [DropperAuthController::class, 'update']);



    // Refer and Earn
    Route::post('refer-n-earn', [App\Http\Controllers\Api\V1\Dropper\ReferralController::class, 'store']);


    // Show task in maps
    Route::get('/tasks/map-show', [App\Http\Controllers\Api\V1\Dropper\TaskController::class, 'tasksMapShow']);
    
    // Get all the pending tasks
    Route::get('/tasks/pending', [App\Http\Controllers\Api\V1\Dropper\TaskController::class, 'pendingTasks']);

    // Get all the confirmed tasks
    Route::get('/tasks/confirmed', [App\Http\Controllers\Api\V1\Dropper\TaskController::class, 'confirmedTasks']);

    // Start a task
    Route::post('/task-start', [App\Http\Controllers\Api\V1\Dropper\TaskController::class, 'startTask']);


    // Get all the in progress tasks
    Route::get('/tasks/in-progress', [App\Http\Controllers\Api\V1\Dropper\TaskController::class, 'inProgressTasks']);

    // Get all completed tasks
    Route::get('/tasks/completed', [App\Http\Controllers\Api\V1\Dropper\TaskController::class, 'completedTasks']);

    // Get single task info for Task View without task status logic
    Route::get('/task-view/offers/{id}', [App\Http\Controllers\Api\V1\Dropper\TaskController::class, 'singleTaskView']);



    // Get single task info for submit offer
    Route::get('/tasks/{taskId}', [App\Http\Controllers\Api\V1\Dropper\TaskController::class, 'singleTaskInfo']);

    // Task Submit Offer
    Route::post('/tasks/{taskId}', [App\Http\Controllers\Api\V1\Dropper\offerController::class, 'submitOffer']);

        


    Route::post('/tasks/review-submit', function(){
        return response()->json(["data" => []]);
    });


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





