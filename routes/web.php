<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/user-login-form', [HomeController::class, 'loginForm']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/not-found', [HomeController::class, 'notFound']);


Route::get('/admin', function () {
    return 'This is the Admin route';
})->middleware('admin');

Route::get('/vendor', function () {
    return 'This is the Vendor route';
})->middleware('vendor');

Route::get('/user', function () {
    return 'This is the User route';
})->middleware('user');