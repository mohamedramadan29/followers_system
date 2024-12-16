<?php

use App\Http\Controllers\front\Auth\LoginController;
use App\Http\Controllers\front\Auth\RegisterController;
use App\Http\Controllers\front\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\front\ProductController;
use App\Http\Controllers\front\User\ProfileController;

Route::controller(LoginController::class)->group(function () {

    Route::get('login', action: 'show_login')->name('login');
    Route::post('login', 'login')->name('login.post');
});


Route::controller(RegisterController::class)->group(function () {

    Route::get('register', action: 'show_register')->name('register');
    Route::post('register', 'register')->name('register.post');
});

Route::group(['prefix' => 'user'], function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('profile');
    });
});
Route::prefix('user')->controller(ProfileController::class)->group(function () {
    Route::get('profile', 'index')->name('profile');
});


Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('category', 'category');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('product', 'index');
    Route::get('product_details/{id}', 'showServiceDetails');
});
Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'index');
});

include 'admin.php';
