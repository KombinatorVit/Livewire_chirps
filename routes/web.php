<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PostController;
use App\Livewire\CreatePost;
use App\Livewire\Todos;
use App\Livewire\PostList;
use Illuminate\Support\Facades\Route;

Route::get('todos', Todos::class)->name('todos');
Route::get('counter', \App\Livewire\Counter::class)->name('counter');
Route::view('/welcome', 'welcome',);

Route::get('/posts', PostList::class)->name('posts.index');
Route::get('/posts/create', CreatePost::class)->name('posts.create');
//Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
//Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('chirps', [ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
