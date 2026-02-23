<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'queries']);

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/upload', [UploadController::class, 'index']);
Route::post('/upload', [UploadController::class, 'upload']);
