<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/register', [UserController::class, 'register']);
Route::get('/get-users', [UserController::class, 'index']);
Route::get('/test', function () {
    return response()->json(['message' => 'API workingddfdfd']);
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
