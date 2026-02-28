<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/signUp', [UserController::class, 'signUp']);

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::get('/students', [StudentController::class, 'list']);
});