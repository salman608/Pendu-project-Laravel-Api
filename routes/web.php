<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ShopAndDropController;
use App\Http\Controllers\User\CollectAndDeliveryController;
use App\Http\Controllers\User\TaskController;
use App\Http\Controllers\User\MoverController;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Twilio\Rest\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */


Auth::routes();

/**
 *
 * Frontend  Routes
 *http://pendu-office.mr/frontend/assets/images/Icons/truck.svg
 */
Route::get('/hello/{orderId}', function($orderId){
    // return Carbon::tomorrow();
    // asset(), url(),
    // <img src="{{url('/images/myimage.jpg')}}" alt="Image"/>
    // return URL::to(Config::get('assets.' . $type) . '/' . $file);


    // <img src=public_path().'/images/imagename.jpg' >
    // https://stackoverflow.com/questions/26286175/access-images-inside-public-folder-in-laravel

    // return url('/frontend/assets/images/Icons/');


    // $orderID = 523590133;

    $taskOrder = TaskOrder::where('order_id', $orderId)->first();
    $taskOrder->update([
        "status"=> TaskOrder::STATUS_IN_PROGRESS,
    ]);

    return TaskOrder::STATUS_IN_PROGRESS;


    return auth()->user()->profile_photo;

});



Route::get('/sms/', function(){

    $receiverNumber = '+8801885544345';
    $message = "This is testing from Pendu";

    try {

        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_TOKEN");
        $twilio_number = getenv("TWILIO_FROM");

        $client = new Client($account_sid, $auth_token);
        $client->messages->create($receiverNumber, [
            'from' => $twilio_number,
            'body' => $message]);

        dd('SMS Sent Successfully.');

    } catch (Exception $e) {
        dd("Error: ". $e->getMessage());
    }
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Services routes
Route::get('shop_n_drop', [ShopAndDropController::class, 'index'])->name('shop_n_drop');
Route::post('shop_n_drop', [ShopAndDropController::class, 'store'])->name('shop_n_drop.store');


// Route::post('/tasks', [App\Http\Controllers\User\TaskController::class, 'store'])->name('task.store');



Route::get('collect_n_delivery', [CollectAndDeliveryController::class, 'index'])->name('collect_n_drop');
Route::post('collect_n_drop', [CollectAndDeliveryController::class, 'store'])->name('collect_n_drop.store');
Route::get('mover', [MoverController::class, 'index'])->name('mover');
Route::post('mover', [MoverController::class, 'store'])->name('mover.store');


/**
 * User routes
 */
Route::group(["as" => 'user.', "prefix" => 'user'], function () {
    Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');

    Route::get('profile', [App\Http\Controllers\User\UserDashboardController::class, 'profile'])->name('profile');

    Route::get('tasks', [App\Http\Controllers\User\UserDashboardController::class, 'tasks'])->name('tasks');
    Route::get('task_offer_json/{id}', [App\Http\Controllers\User\UserDashboardController::class, 'TaskOfferJson'])->name('task_offer_json');

    Route::get('task_order_json/{orderId}', [App\Http\Controllers\User\UserDashboardController::class, 'TaskOrderJson'])->name('task_order_json');

    Route::post('review-submit/', [App\Http\Controllers\User\ReviewController::class, 'reviewSubmit'])->name('review_submit');


    // Offers
    Route::get('offers', [App\Http\Controllers\User\UserDashboardController::class, 'promoOffer'])->name('promo-offer');
    Route::get('offers/{id}', [App\Http\Controllers\User\UserDashboardController::class, 'offerDetailsJson'])->name('offer-details');



    Route::get('history', [App\Http\Controllers\User\UserDashboardController::class, 'history'])->name('history');
    Route::get('delivery', [App\Http\Controllers\User\UserDashboardController::class, 'delivery'])->name('delivery');

    Route::get('payments', [App\Http\Controllers\User\UserDashboardController::class, 'payment'])->name('payment-page');
    Route::get('pendu-pay', [App\Http\Controllers\User\UserDashboardController::class, 'penduPay'])->name('pendu-pay');


    Route::get('notifications', [App\Http\Controllers\User\UserDashboardController::class, 'notifications'])->name('notifications');
    Route::get('refar-n-earn', [App\Http\Controllers\User\UserDashboardController::class, 'refarAndEarn'])->name('refar-n-earn');
    Route::get('supports', [App\Http\Controllers\User\UserDashboardController::class, 'support'])->name('support');
    Route::get('faq', [App\Http\Controllers\User\UserDashboardController::class, 'faq'])->name('faq');
    Route::get('term-n-conditions', [App\Http\Controllers\User\UserDashboardController::class, 'termAndCondition'])->name('term-n-conditions');

    Route::get('payment/coupon/{coupon}', [App\Http\Controllers\User\PaymentController::class, 'applyCoupon'])->name('apply-coupon');

    Route::get('payment/{offerId}/task/{taskId}', [App\Http\Controllers\User\PaymentController::class, 'index'])->name('payment');

    Route::post('payment/{offerId}/task/{taskId}', [App\Http\Controllers\User\PaymentController::class, 'checkOutProcess'])->name('payment-process');

    // Order TIps
    Route::get('order-tips/{orderId}', [App\Http\Controllers\User\ReviewController::class, 'index'])->name('order-tips');
    Route::post('order-tips/{orderId}', [App\Http\Controllers\User\ReviewController::class, 'submitTips']);



    // Checked........

    // Route::get('review', [App\Http\Controllers\User\ReviewController::class, 'index'])->name('review');

    Route::get('track', [App\Http\Controllers\User\ReviewController::class, 'orderTraking'])->name('order_track');

    Route::post('track', [App\Http\Controllers\User\ReviewController::class, 'trackOrderStatus']);

    Route::get('review_sent', [App\Http\Controllers\User\ReviewController::class, 'sent']);

});


//profile section
Route::group(["as" => 'profile.', "prefix" => 'profile'], function () {
    // Route::get('/index', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('index');
    Route::post('/update/{id}', [App\Http\Controllers\User\ProfileController::class, 'update'])->name('profile_update');
    Route::post('/sendMail', [App\Http\Controllers\User\ProfileController::class, 'sendInvitationMail'])->name('invitation');
    Route::get('/logout', [App\Http\Controllers\User\ProfileController::class, 'logout']);
});

















/**
 * Stripe Check
 */


Route::get('stripe', [HomeController::class, 'stripe']);
Route::post('stripe', [HomeController::class, 'stripePost'])->name('stripe.post');

Route::get('stripe33', [CheckoutController::class, 'stripe33']);
Route::get('stripe3', [CheckoutController::class, 'stripe3']);
Route::post('stripe3', [CheckoutController::class, 'stripePost3'])->name('stripe3.post');




/**
 * Admin routes
 */

//==========Admin Post Route==========
// Route::group(["as" => 'blog'], function () {
       Route::get('post-list', [App\Http\Controllers\Admin\PostController::class, 'list'])->name('post.list');
//     Route::post('post/create', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('store');

// });


/**
 * Frontend routes
 */

Route::get('posts', [App\Http\Controllers\Frontend\PostController::class, 'allPost'])->name('allpost');
Route::get('singlepost/{post}', [App\Http\Controllers\Frontend\PostController::class, 'singlePost'])->name('singlepost');
