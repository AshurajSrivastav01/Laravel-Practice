<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/registration', [RegistrationController::class, 'index']);
Route::post('/user/registration', [RegistrationController::class, 'registor']);
Route::get('/customer/list', [CustomerController::class, 'customerList']);