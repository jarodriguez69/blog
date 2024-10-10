<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;




Route::view('/', 'welcome')->name('home');
Route::get('blog', [PostController::class,'index'])->name('posts.index');
Route::get('blog/{post}', [PostController::class,'show'])->name('posts.show');

Route::view('nosotros', 'about')->name('about');
Route::view('contacto', 'contact')->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
