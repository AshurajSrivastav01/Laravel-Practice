<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list', [StudentController::class, 'list']);
Route::get('seller', [SellerController::class, 'sellerList']);
Route::get('ManyToOne', [SellerController::class, 'ManyToOne']);