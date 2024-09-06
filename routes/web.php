<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pages/shop', function () {
    return view('pages.shop');
});

Route::get('/pages/electric', function(){
    return view('pages.electric');
});

Route::get('/pages/accesories', function(){
    return view('pages.accesories');
});

Route::get('/pages/about', function(){
    return view('pages.about');
});

Route::get('/pages/contact', function(){
    return view('pages.contact');
});

Route::get('/auth/login', function(){
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
