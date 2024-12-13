<?php

use App\Http\Controllers\front\FrontController;
use Illuminate\Support\Facades\Route;



Route::controller(FrontController::class)->group(function () {
    Route::get('/','index')->name('index');
}); 
include 'admin.php';
