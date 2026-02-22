<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () { return view('home'); });

Route::get('/register', [UserController::class, 'userRegistration']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/get/post/list', [UserController::class, 'getPost']);


Route::prefix('student')
        ->middleware('v1')
        ->controller(StudentController::class)
        ->group( function () {
    Route::get('/index', 'index');
    Route::get('/show', 'show');
    Route::get('/add', 'add');
    Route::get('/delete', 'delete');
});