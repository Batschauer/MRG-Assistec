<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustumersController;

Route::get('/', function () {
    return view('index');
});

Route::resource('/customers', CustumersController::class);
Route::resource('/customers/new', CustumersController::class);

