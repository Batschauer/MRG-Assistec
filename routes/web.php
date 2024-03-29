<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustumersController;
use App\Http\Controllers\TechniciansController;
use App\Http\Controllers\TicketsController;

Route::get('/', function () {
    return view('index');
});

Route::resource('/customers', CustumersController::class);
Route::resource('/customers/new', CustumersController::class);
Route::resource('/technicians', TechniciansController::class);
Route::resource('/technicians/new', TechniciansController::class);
Route::resource('/tickets', TicketsController::class);
Route::resource('/tickets/new', TicketsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
