<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


Route::get('/', function () {
    return view('welcome');
});

Route ::get('/hello', function(){
    return 'Bonjour le monde !';
});

Route::get('/schnaps', function () {
    return view('schnaps');
});

Route::get('/schnaps', function () {
    return view('schnaps');
});

Route::get('/home', function () {
    return View::make('pages.home');
     });

Route::get('/index', function () {
    return View::make('roles.index');
     });
   
Route::get('/about', function () {
     return View::make('pages.about');
     });


#Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);

     
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
