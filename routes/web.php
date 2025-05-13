<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('banks', BankController::class);

Route::resource('users', UserController::class);
