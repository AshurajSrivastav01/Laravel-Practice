<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [UserController::class, 'userRegistration']);
Route::post('/register', [UserController::class, 'register']);