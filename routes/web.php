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
Route::post('shop_n_drop', [ShopAndDropController::class, 'store'])->name('shop_n_drop.add');
Route::get('collect_n_delivery', [CollectAndDeliveryController::class, 'index']);
Route::get('mover', [MoverController::class, 'index']);


//dropper routes
Route::group(["as" => 'dropper.', "prefix" => 'dropper'], function () {
    Route::get('/register', [App\Http\Controllers\User\DropperController::class, 'create'])->name('add-dropper');
    Route::post('/store', [App\Http\Controllers\User\DropperController::class, 'store'])->name('store');
});

/**
 * User routes
 */
Route::group(["as" => 'user.', "prefix" => 'user'], function () {
    Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
});