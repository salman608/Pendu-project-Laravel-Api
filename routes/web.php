<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ShopAndDropController;
use App\Http\Controllers\User\CollectAndDeliveryController;
use App\Http\Controllers\User\MoverController;


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

Route::get('/service-list', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('service.list');
Route::get('/service-create', [App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('service.create');
Route::post('/service-store', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('service.store');
Route::get('/service-edit/{service_id}', [App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('service.edit');
Route::post('/service-update/{service_id}', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('service.update');
Route::post('/service-delete/{service_id}', [App\Http\Controllers\Admin\ServiceController::class, 'delete'])->name('service.delete');
Route::get('/service-active/{service_id}', [App\Http\Controllers\Admin\ServiceController::class, 'active'])->name('service.active');
Route::get('/service-inactive/{service_id}', [App\Http\Controllers\Admin\ServiceController::class, 'inactive'])->name('service.inactive');

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


//user area----------------------------




Auth::routes();

/**
 *
 * Frontend  Routes
 *
 */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [HomeController::class, 'index'])->name('home');

// Services routes
Route::get('shop_n_drop', [ShopAndDropController::class, 'index']);
Route::get('collect_n_delivery', [CollectAndDeliveryController::class, 'index']);
Route::get('mover', [MoverController::class, 'index']);


//dropper routes
Route::group(["as" => 'dropper.', "prefix" => 'dropper'], function () {
    Route::get('/register', [App\Http\Controllers\User\DropperController::class, 'create'])->name('add-dropper');
    Route::post('/store', [App\Http\Controllers\User\DropperController::class, 'store'])->name('store');
});
