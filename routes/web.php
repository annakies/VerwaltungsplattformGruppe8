<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SupplierRegisterController;
use App\Http\Controllers\Auth\CustomerRegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');
/**
 * Useless
 */
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/lieferant', [LieferantController::class, 'index'])->name('lieferant');
Route::get('/verwaltung', [VerwaltungController::class, 'index'])->name('verwaltung');
Route::get('/kunde', [KundeController::class, 'index'])->name('kunde');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
/**
 * Registrierungs Routen für Lieferant und Kunde
 */
Route::get('/sRegister', [SupplierRegisterController::class, 'index'])->name('sRegister');
Route::post('/sRegister', [SupplierRegisterController::class, 'store']);

Route::get('/cRegister', [CustomerRegisterController::class, 'index'])->name('cRegister');
Route::post('/cRegister', [CustomerRegisterController::class, 'store']);

/** following are Unsused */
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');
