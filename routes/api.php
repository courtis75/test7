<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
   // return $request->user();
//})->middleware('auth:sanctum');

Route::get('/user', [UserController::class,'index'])->middleware('auth:sanctum');
Route::post('/login', [AuthController::class,'login']);