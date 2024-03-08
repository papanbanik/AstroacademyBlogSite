<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\postController;
use App\Http\Controllers\commentcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\UserController;
use App\Models\Category;

Route::get('/',[UserController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/addpost', [UserController::class, 'addpost'])->name('addpost');
Route::get('/index', [UserController::class, 'addpost'])->name('index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin/comment', [App\Http\Controllers\commentcontroller::class,'comment'])->name('admin.comment');
Route::get('/admin/addcomment', [App\Http\Controllers\commentcontroller::class,'addcomment'])->name('comment.addcomment');
Route::get('/admin/insert', [App\Http\Controllers\commentcontroller::class,'insertdata'])->name('comment.insertdata');


// ...

require __DIR__.'/auth.php';
/*
|--------------------------------------------------------------------------
| Admin Routes-
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');

    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

 Route::resource('/admin/category',CategoryController::class);
 Route::resource('/admin/post',PostController::class);
 Route::get('/addpost', [PostController::class, 'addpost'])->name('post.addpost');

 // routes/web.php


});

// web.php


