<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;


Route::get('/', function () {
    return view('welcome');
});




/* Route::get('/posts',[PostController::class,'index'])->name('posts.index'); --}} */
/* Route::get('/posts/create',[PostController::class,'create'])->name('posts.create'); --}} */
/* Route::get('/posts/show',[PostController::class,'show'])->name('posts.show'); --}} */

Route::group(['middleware'=> ['auth']],function() {
    Route::resource('posts', PostController::class);
    Route::resource('photos', PhotoController::class);
    Route::get('posts.search', [PostController::class, 'search'])->name('posts.search');
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//->middleware('auth');
    Route::get('/home', [PostController::class, 'index'])->name('home');//->middleware('auth');
   
    

});



Auth::routes();


