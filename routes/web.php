<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisterController;


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
    Route::get('/home', [PostController::class, 'index'])->name('home');
   
    

});

//Route::prefix('admin')->group(['middleware'=> ['auth']],function() {
  //  Route::resource('admin/posts', PostController::class);
   // Route::resource('admin/photos', PhotoController::class);
   // Route::get('admin/posts.search', [PostController::class, 'search'])->name('posts.search');
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//->middleware('auth');
    //Route::get('admin/posts', [PostController::class, 'index'])->name('home');//->middleware('auth');
    //dd('test');

    //Route::get('admin/posts',[AdminPostController::class,'index'])->name('admin/posts.index')->middleware(AdminMiddleware::class);
    //Route::get('admin/posts',[AdminPostController::class,'create'])->name('admin/posts.create');


    Route::get('admin/posts',[AdminPostController::class,'show'])->name('admin/posts.show')->middleware(AdminMiddleware::class);
    

    //Route::get('admin/posts/manage',[AdminPostController::class,'manage'])->name('Admin/posts.manage')->middleware(AdminMiddleware::class);
    //Route::get('admin/users/manage',[UserController::class,'manage'])->name('Admin/users.manage')->middleware(AdminMiddleware::class);
    Route::get('admin/posts/{id}',[AdminPostController::class,'showEach'])->name('admin/posts.showEach')->middleware(AdminMiddleware::class);
    Route::get('admin/users/{id}',[UserController::class,'showEach'])->name('admin/users.showEach')->middleware(AdminMiddleware::class);

    // Edit post
Route::get('admin/posts/{id}/edit', [AdminPostController::class, 'edit'])->name('admin/posts.edit')->middleware(AdminMiddleware::class);
Route::get('admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin/users.edit')->middleware(AdminMiddleware::class);
Route::put('admin/posts/{id}/update', [AdminPostController::class, 'update'])->name('admin/posts.update')->middleware(AdminMiddleware::class);
Route::put('admin/users/{id}/update', [UserController::class, 'update'])->name('admin/users.update')->middleware(AdminMiddleware::class);

// Delete post
Route::delete('admin/posts/{id}', [AdminPostController::class, 'destroy'])->name('admin/posts.destroy')->middleware(AdminMiddleware::class);
Route::delete('admin/users/{id}', [UserController::class, 'destroy'])->name('admin/users.destroy')->middleware(AdminMiddleware::class);

// Route to show the registration form
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route to handle the registration form submission
Route::post('register', [RegisterController::class, 'register']);

//});


Auth::routes();


