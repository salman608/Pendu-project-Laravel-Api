<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ShopAndDropController;
use App\Http\Controllers\User\CollectAndDeliveryController;
use App\Http\Controllers\User\TaskController;
use App\Http\Controllers\User\MoverController;
use Carbon\Carbon;

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
 *
 */
Route::get('/hello', function(){
    return Carbon::tomorrow();
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Services routes
Route::get('shop_n_drop', [ShopAndDropController::class, 'index'])->name('shop_n_drop');
Route::post('shop_n_drop', [ShopAndDropController::class, 'store'])->name('shop_n_drop.store');


// Route::post('/tasks', [App\Http\Controllers\User\TaskController::class, 'store'])->name('task.store');



Route::get('collect_n_delivery', [CollectAndDeliveryController::class, 'index']);
Route::get('mover', [MoverController::class, 'index']);


/**
 * User routes
 */
Route::group(["as" => 'user.', "prefix" => 'user'], function () {
    Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');

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
