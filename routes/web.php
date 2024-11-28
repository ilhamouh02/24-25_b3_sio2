<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Routes simples
Route::get('/hello', function () {
    return 'Bonjour le monde !';
});

Route::get('/schnaps', function () {
    return view('schnaps');
});

// Pages statiques
Route::view('/home', 'pages.home');
Route::view('/about', 'pages.about');

// Routes pour les rôles
Route::resource('roles', RoleController::class);

// Routes pour les utilisateurs
Route::resource('users', UserController::class);

// Routes authentifiées
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
