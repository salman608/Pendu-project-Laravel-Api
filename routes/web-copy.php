<?php

use App\Http\Controllers\Admin\CouponController;
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

// ---------------Admin Route Service --------

Route::get('/service-list', [App\Http\Controllers\Admin\ServiceCategoryController::class, 'index'])->name('service.list');
Route::get('/service-create', [App\Http\Controllers\Admin\ServiceCategoryController::class, 'create'])->name('service.create');
Route::post('/service-store', [App\Http\Controllers\Admin\ServiceCategoryController::class, 'store'])->name('service.store');
Route::get('/service-edit/{service_id}', [App\Http\Controllers\Admin\ServiceCategoryController::class, 'edit'])->name('service.edit');
Route::post('/service-update/{service_id}', [App\Http\Controllers\Admin\ServiceCategoryController::class, 'update'])->name('service.update');
Route::post('/service-delete/{service_id}', [App\Http\Controllers\Admin\ServiceCategoryController::class, 'delete'])->name('service.delete');
Route::get('/service-active/{service_id}', [App\Http\Controllers\Admin\ServiceCategoryController::class, 'active'])->name('service.active');
Route::get('/service-inactive/{service_id}', [App\Http\Controllers\Admin\ServiceCategoryController::class, 'inactive'])->name('service.inactive');

// ---------------Admin Route Vehicle Type--------
Route::get('/vehicle-list', [App\Http\Controllers\Admin\VehicleController::class, 'index'])->name('vehicle.list');
Route::get('/vehicle-create', [App\Http\Controllers\Admin\VehicleController::class, 'create'])->name('vehicle.create');
Route::post('/vehicle-store', [App\Http\Controllers\Admin\VehicleController::class, 'store'])->name('vehicle.store');
Route::get('/vehicle-edit/{vehicle_id}', [App\Http\Controllers\Admin\VehicleController::class, 'edit'])->name('vehicle.edit');
Route::post('/vehicle-update/{vehicle_id}', [App\Http\Controllers\Admin\VehicleController::class, 'update'])->name('vehicle.update');
Route::post('/vehicle-delete/{vehicle_id}', [App\Http\Controllers\Admin\VehicleController::class, 'delete'])->name('vehicle.delete');
Route::get('/vehicle-active/{vehicle_id}', [App\Http\Controllers\Admin\VehicleController::class, 'active'])->name('vehicle.active');
Route::get('/vehicle-inactice/{vehicle_id}', [App\Http\Controllers\Admin\VehicleController::class, 'inactive'])->name('vehicle.inactive');

// ---------------Admin Route Product Category --------
Route::get('/product_cat_list', [App\Http\Controllers\Admin\ProductCategoryController::class, 'index'])->name('pro_cat.list');
Route::get('/product_cat_create', [App\Http\Controllers\Admin\ProductCategoryController::class, 'create'])->name('pro_cat.create');
Route::post('/product_cat_store', [App\Http\Controllers\Admin\ProductCategoryController::class, 'store'])->name('pro_cat.store');
Route::get('/product_cat_edit/{pcat_id}', [App\Http\Controllers\Admin\ProductCategoryController::class, 'edit'])->name('pro_cat.edit');
Route::post('/product_cat_update/{pcat_id}', [App\Http\Controllers\Admin\ProductCategoryController::class, 'update'])->name('pro_cat.update');
Route::post('/product_cat_delete/{pcat_id}', [App\Http\Controllers\Admin\ProductCategoryController::class, 'delete'])->name('pro_cat.delete');
Route::get('/product_cat_active/{pcat_id}', [App\Http\Controllers\Admin\ProductCategoryController::class, 'active'])->name('pro_cat.active');
Route::get('/product_cat_inactice/{pcat_id}', [App\Http\Controllers\Admin\ProductCategoryController::class, 'inactive'])->name('pro_cat.inactive');

// ---------------Admin Route Product Tag --------
Route::get('/product_tag_list', [App\Http\Controllers\Admin\TagController::class, 'index'])->name('pro_tag.list');
Route::get('/product_tag_create', [App\Http\Controllers\Admin\TagController::class, 'create'])->name('pro_tag.create');
Route::post('/product_tag_add', [App\Http\Controllers\Admin\TagController::class, 'store'])->name('pro_tag.store');
Route::get('/product_tag_edit/{tag_id}', [App\Http\Controllers\Admin\TagController::class, 'edit'])->name('pro_tag.edit');
Route::post('/product_tag_update/{tag_id}', [App\Http\Controllers\Admin\TagController::class, 'update'])->name('pro_tag.update');
Route::post('/product_tag_delete/{tag_id}', [App\Http\Controllers\Admin\TagController::class, 'delete'])->name('pro_tag.delete');

//--------------Admin Blog Route----------
Route::group(["as" => 'blog'], function () {
    Route::get('post-list', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('post.list');
    Route::get('post-create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('post.create');
    Route::post('post-store', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('post.store');
    Route::get('post-edit/{post_id}', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('post.edit');
    Route::post('post-update/{post_id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('post.update');
    Route::delete('post-delete/{post_id}', [App\Http\Controllers\Admin\BlogController::class, 'delete'])->name('post.delete');
    Route::get('post-active/{post_id}', [App\Http\Controllers\Admin\BlogController::class, 'active'])->name('post.active');
    Route::get('post-inactive/{post_id}', [App\Http\Controllers\Admin\BlogController::class, 'inactive'])->name('post.inactive');

});

//--------------Admin Delivery Time Route----------
Route::group(["as" => 'time'], function () {
    Route::get('dtime-list', [App\Http\Controllers\Admin\DeliveryTimeController::class, 'index'])->name('dtime.list');
    Route::get('dtime-create', [App\Http\Controllers\Admin\DeliveryTimeController::class, 'create'])->name('dtime.create');
    Route::post('dtime-store', [App\Http\Controllers\Admin\DeliveryTimeController::class, 'store'])->name('dtime.store');
    Route::get('dtime-edit/{time_id}', [App\Http\Controllers\Admin\DeliveryTimeController::class, 'edit'])->name('dtime.edit');
    Route::post('dtime-update/{time_id}', [App\Http\Controllers\Admin\DeliveryTimeController::class, 'update'])->name('dtime.update');
    Route::delete('dtime-delete/{time_id}', [App\Http\Controllers\Admin\DeliveryTimeController::class, 'delete'])->name('dtime.delete');
    Route::get('dtime-active/{time_id}', [App\Http\Controllers\Admin\DeliveryTimeController::class, 'active'])->name('dtime.active');
    Route::get('dtime-inactive/{time_id}', [App\Http\Controllers\Admin\DeliveryTimeController::class, 'inactive'])->name('post.inactive');

});





// Admin  -> Coupon 
Route::group(["as" => 'admin.', "prefix" => 'admin'], function () {
    Route::resource('coupons', CouponController::class);
});













//user area----------------------------



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/post', [App\Http\Controllers\User\PostController::class, 'index'])->name('post');
// Route::get('/post/create', [App\Http\Controllers\User\PostController::class, 'create']);
// Route::get('/single_post/{id}', [App\Http\Controllers\User\PostController::class, 'show']);

Route::get('/how-it-work', [App\Http\Controllers\User\PostController::class, 'how_it_work'])->name('how-it-work');

//dropper section
Route::group(["as" => 'quote.', "prefix" => 'quote'], function () {
    Route::post('/store', [App\Http\Controllers\User\QuoteController::class, 'store'])->name('store');
});



//profile section
Route::group(["as" => 'profile.', "prefix" => 'profile'], function () {
    Route::get('/index', [App\Http\Controllers\User\ProfileController::class, 'index'])->name('index');
    Route::post('/update/{id}', [App\Http\Controllers\User\ProfileController::class, 'update']);
    Route::post('/sendMail', [App\Http\Controllers\User\ProfileController::class, 'sendInvitationMail'])->name('invitation');
    Route::get('/logout', [App\Http\Controllers\User\ProfileController::class, 'logout']);
});

Route::group(["middleware" => 'auth'], function () {
    // Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index']);
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


    });

    Route::group(["as" => 'task.', "prefix" => 'task'], function () {
        Route::post('add', [App\Http\Controllers\Frontend\TaskController::class, 'create'])->name('add');
    });

 

    Route::get('payment', [App\Http\Controllers\User\PaymentController::class, 'index']);
    Route::get('review', [App\Http\Controllers\User\ReviewController::class, 'index']);
    Route::get('review_sent', [App\Http\Controllers\User\ReviewController::class, 'sent']);

    // "middleware" => 'driver'
    Route::group(["as" => 'driver.', "prefix" => 'driver'], function () {
        // Route::get('dashboard', [App\Http\Controllers\Driver\DriverDashboardController::class, 'index'])->name('dashboard');
        //quote section
        // Route::group(["as" => 'quote.', "prefix" => 'quote'], function () {
        //     Route::get('/user-quote', [App\Http\Controllers\Driver\QuoteController::class, 'user_quote'])->name('user-quote');
        //     Route::get('/pending/{id}', [App\Http\Controllers\Driver\QuoteController::class, 'pending'])->name('pending');
        //     Route::get('/accept/{id}', [App\Http\Controllers\Driver\QuoteController::class, 'accept'])->name('accept');
        // });

    });
});






