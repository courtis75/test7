<?php

use App\Models\User;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
   // return $request->user();
   //dd(User::all());
//})->middleware('auth:sanctum');

Route::get('/user', [UserController::class,'index']);//->middleware('auth:sanctum');
Route::get('/post', [PostController::class,'index']);//->middleware('auth:sanctum');
Route::get('/posts/{id}', [PostController::class,'showEach']);//->middleware('auth:sanctum');
Route::post('/login', [AuthController::class,'login']);