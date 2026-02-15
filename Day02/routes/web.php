<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/registration', [RegistrationController::class, 'index']);
Route::post('/user/registration', [RegistrationController::class, 'registor']);