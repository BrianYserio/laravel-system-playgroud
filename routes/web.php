<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\Auth\LogoutController;
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

Route::controller(AdminController::class)
        ->prefix('admin')
        ->name('admin.')
        ->group(function() {
Route::get('dashboard', 'index')->name('dashboard');
});

Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

Route::post('/logout', LogoutController::class)->name('logout');
