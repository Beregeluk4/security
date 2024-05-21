<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');;

Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth'])->name('profile');;

Route::get('/faqs', [FaqController::class, 'index'])->middleware(['auth'])->name('faqs.index');;
Route::get('/faqs/create', [FaqController::class, 'create'])->middleware(['auth'])->name('faqs.create');
Route::post('/faqs', [FaqController::class, 'store'])->middleware(['auth'])->name('faqs.store');
Route::get('/faqs/{faq}', [FaqController::class, 'show'])->middleware(['auth'])->name('faqs.show');
Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit'])->middleware(['auth'])->name('faqs.edit');
Route::patch('/faqs/{faq}', [FaqController::class, 'update'])->middleware(['auth'])->name('faqs.update');
Route::get('/faqs/{faq}/delete', [FaqController::class, 'delete'])->middleware(['auth'])->name('faqs.delete');
Route::delete('/faqs/{faq}', [FaqController::class, 'destroy'])->middleware(['auth'])->name('faqs.destroy');

Route::get('/posts', [PostController::class, 'index'])->middleware(['auth'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->middleware(['auth'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->middleware(['auth'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->middleware(['auth'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware(['auth'])->name('posts.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])->middleware(['auth'])->name('posts.update');
Route::get('/posts/{post}/delete', [PostController::class, 'delete'])->middleware(['auth'])->name('posts.delete');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware(['auth'])->name('posts.destroy');
