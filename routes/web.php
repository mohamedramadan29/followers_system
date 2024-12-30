<?php

use App\Http\Controllers\front\OrdersController;
use App\Http\Controllers\front\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\front\TermsController;
use App\Http\Controllers\front\TicketController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\ProductController;
use App\Http\Controllers\front\Auth\LoginController;
use App\Http\Controllers\front\User\ProfileController;
use App\Http\Controllers\front\Auth\RegisterController;
use App\Http\Controllers\front\TicketMessageController;
use App\Http\Controllers\front\Auth\SocialLoginController;
use App\Http\Controllers\front\UserBalanceController;

Route::controller(LoginController::class)->group(function () {

    Route::get('login', action: 'show_login')->name('login');
    Route::post('login', 'login')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
    /////// Forget Password
    ///
    Route::match(['post', 'get'], 'forget-password', 'forget_password');
    Route::match(['post', 'get'], 'user/change-forget-password/{code}', 'change_forget_password');
    Route::post('user/update_forget_password', 'update_forget_password');
});


Route::controller(RegisterController::class)->group(function () {

    Route::get('register', action: 'show_register')->name('register');
    Route::post('register', 'register')->name('register.post');
    Route::get('user/confirm/{code}', 'UserConfirm');
});

Route::group(['prefix' => 'user'], function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('profile');
        Route::get('setting', 'setting');
        Route::post('update_setting', 'UpdateSetting')->name('update_setting');
        Route::post('update_password', 'UpdatePassword')->name('update_password');
        Route::get('orders', 'orders');
        Route::get('alerts', 'alerts');
        Route::get('balance', 'balance');
    });
    Route::controller(UserBalanceController::class)->group(function () {
        Route::get('balance', 'index');
        Route::post('balance/store', 'store')->name('store_balance');
    });
    Route::controller(TicketController::class)->group(function () {
        Route::get('tickets', 'tickets')->name('tickets');
        Route::get('ticket/add', 'create');
        Route::post('ticket/store', 'store')->name('store_ticket');
    });
    Route::controller(TicketMessageController::class)->group(function () {
        Route::get('ticket/{id}', 'index');
        Route::post('message/create/{ticket_id}', 'store');
    });
});
Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('category/{slug}', 'category');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('product/{slug}', 'index');
    Route::get('product_details/{id}', 'showServiceDetails');
    Route::get('/get-sub-service-details/{product_id}/{subServiceId}', 'getSubServiceDetails');

});
Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'index');
    Route::post('contact', 'store')->name('send_message');
});

######################## Terms Controller ##################
Route::controller(TermsController::class)->group(function () {

    Route::get('terms', 'terms');
    Route::get('return-policy', 'ReturnPolicy');
    Route::get('privacy-policy', 'PrivacyPolicy');
});


##################### Blog Controller #####################

Route::controller(BlogController::class)->group(function () {
    Route::get('blog', 'index');
    Route::get('blog/{slug}', 'show');
});

########################## Start Make Order ################


Route::controller(OrdersController::class)->group(function () {

    Route::post('make-order', 'store')->name('make_order');
});

########################## End Make Order ################

Route::get('auth/{provider}/redirect', action: [SocialLoginController::class, 'redirect'])->name('auth.google.redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'callback'])->name('auth.google.callback');




include 'admin.php';
