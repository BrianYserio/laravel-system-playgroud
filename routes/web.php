<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(RegisterUserController::class)
    ->prefix('register')
    ->name('register.')
    ->group(function(){
Route::get('/', 'create')->name('create');
Route::post('/', 'store')->name('store');
});

Route::controller(AuthUserController::class)
    ->prefix('login')
    ->name('login.')
    ->group(function(){
Route::get('/', 'create')->name('create');
Route::post('/', 'store')->name('store');
});
