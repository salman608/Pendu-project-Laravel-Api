<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controller\User;
use App\Http\Controllers\Dropper\Auth\LoginController;
use App\Http\Controllers\Dropper\Auth\RegisterController;

// use App\Http\Controllers\Driver\Auth\RegisterController;

// //dropper routes
Route::group(["as" => 'dropper.', "prefix" => 'dropper'], function () {
    // Authentication Routes...
    // Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    // Route::post('login', [LoginController::class, 'login'])->name('login');
    // Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register');


    Route::get('add-dropper', function(){
        return 'Add dropper page..';
    })->name('add-dropper');

});