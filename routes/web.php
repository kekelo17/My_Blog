<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view("Home");
});

Route::get('/contact', function () {
    return view("Contact");
});

Route::get('/about', function () {
    return view("About");
});

Route::get('/users', [UserController::class, "index"]);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {
    return redirect('/posts');
})->middleware('auth');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Routes that must be defined before the catch-all '/posts/{post}' so 'create' doesn't get treated as {post}
Route::middleware('auth')->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::post('/posts/{post}/like', [LikeController::class, 'toggle'])->name('posts.like');
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('posts.comments.store');
});

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');