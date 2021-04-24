<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// ======= Admin Area ===================

// --------------Admin Route ServiceFee----------
Route::get('/service_charge/list', [App\Http\Controllers\Admin\ServiceFeeConttroller::class, 'index'])->name('servicefee.list');
Route::get('/service_charge/add', [App\Http\Controllers\Admin\ServiceFeeConttroller::class, 'create'])->name('servicefee.create');
Route::post('/service_charge/store', [App\Http\Controllers\Admin\ServiceFeeConttroller::class, 'store'])->name('servicefee.store');
Route::get('/service_charge/edit/{id}', [App\Http\Controllers\Admin\ServiceFeeConttroller::class, 'edit'])->name('servicefee.edit');
Route::get('/service_charge/update/{id}', [App\Http\Controllers\Admin\ServiceFeeConttroller::class, 'update'])->name('servicefee.update');



//user area----------------------------



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post', [App\Http\Controllers\User\PostController::class, 'index'])->name('post');
Route::get('/post/create', [App\Http\Controllers\User\PostController::class, 'create']);
Route::get('/single_post/{id}', [App\Http\Controllers\User\PostController::class, 'show']);

Route::get('/how-it-work', [App\Http\Controllers\User\PostController::class, 'how_it_work'])->name('how-it-work');

//dropper section
Route::group(["as" => 'quote.', "prefix" => 'quote'], function () {
    Route::post('/store', [App\Http\Controllers\User\QuoteController::class, 'store'])->name('store');
});

//dropper section
Route::group(["as" => 'dropper.', "prefix" => 'dropper'], function () {
    Route::get('/create', [App\Http\Controllers\User\DropperController::class, 'create'])->name('add-dropper');
    Route::post('/store', [App\Http\Controllers\User\DropperController::class, 'store'])->name('store');
});

//profile section
Route::group(["as" => 'profile.', "prefix" => 'profile'], function () {
    Route::get('/index', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('index');
    Route::post('/update/{id}', [App\Http\Controllers\User\ProfileController::class, 'update']);
    Route::post('/sendMail', [App\Http\Controllers\User\ProfileController::class, 'sendInvitationMail'])->name('invitation');
    // Route::get('/logout', [App\Http\Controllers\User\ProfileController::class, 'logout']);
});

Route::group(["middleware" => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index']);
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    // "middleware" => 'admin'
    Route::group(["prefix" => 'admin'], function () {
        Route::get('dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('admin.dashboard');

        Route::group(["as" => 'home'], function () {
            Route::get('order-list', [App\Http\Controllers\Admin\AdminDashboardController::class, 'orderList'])->name('.order.list');
            Route::get('customer-list', [App\Http\Controllers\Admin\AdminDashboardController::class, 'customerList'])->name('.customer.list');
            Route::get('driver-list', [App\Http\Controllers\Admin\AdminDashboardController::class, 'driverList'])->name('.driver.list');
            Route::get('flagged-list', [App\Http\Controllers\Admin\AdminDashboardController::class, 'flaggedList'])->name('.flagged.list');
        });

        Route::group(["as" => 'dropperManagement'], function () {
            Route::get('manager-list', [App\Http\Controllers\Admin\DropperManagementController::class, 'namagerList'])->name('.manager.list');
            Route::get('dropper-list', [App\Http\Controllers\Admin\DropperManagementController::class, 'dropperList'])->name('.dropper.list');
            Route::get('dropperOnboarding-list', [App\Http\Controllers\Admin\DropperManagementController::class, 'dropperOnboardingList'])->name('.dropperOnboarding.list');
        });

        Route::group(["as" => 'blog'], function () {
            Route::get('post-list', [App\Http\Controllers\Admin\BlogController::class, 'postList'])->name('.post.list');
            Route::get('category-list', [App\Http\Controllers\Admin\BlogController::class, 'categoryList'])->name('.category.list');
            Route::get('tag-list', [App\Http\Controllers\Admin\BlogController::class, 'tagList'])->name('.tag.list');
        });
    });

    Route::group(["as" => 'task.', "prefix" => 'task'], function () {
        Route::post('add', [App\Http\Controllers\User\TaskController::class, 'create'])->name('add');
    });

    // "middleware" => 'user'
    Route::group(["as" => 'user.', "prefix" => 'user'], function () {
        Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
    });
    Route::get('shop_n_drop', [App\Http\Controllers\User\ShopAndDropController::class, 'index']);
    Route::get('collect_n_delivery', [App\Http\Controllers\User\CollectAndDeliveryController::class, 'index']);
    Route::get('mover', [App\Http\Controllers\User\MoverController::class, 'index']);
    Route::get('payment', [App\Http\Controllers\User\PaymentController::class, 'index']);
    Route::get('review', [App\Http\Controllers\User\ReviewController::class, 'index']);
    Route::get('review_sent', [App\Http\Controllers\User\ReviewController::class, 'sent']);

    // "middleware" => 'driver'
    Route::group(["as" => 'driver.', "prefix" => 'driver'], function () {
        Route::get('dashboard', [App\Http\Controllers\Driver\DriverDashboardController::class, 'index'])->name('dashboard');
        //quote section
        Route::group(["as" => 'quote.', "prefix" => 'quote'], function () {
            Route::get('/user-quote', [App\Http\Controllers\Driver\QuoteController::class, 'user_quote'])->name('user-quote');
            Route::get('/pending/{id}', [App\Http\Controllers\Driver\QuoteController::class, 'pending'])->name('pending');
            Route::get('/accept/{id}', [App\Http\Controllers\Driver\QuoteController::class, 'accept'])->name('accept');
        });

    });
});
