<?php

//only non-commented code that works without the generative login, since you should also be able to
//visit without that, but I might need it later

use App\Http\Controllers\AboutUsController;

//route

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

Route::view('/', 'home')->name('home');

Route::get('/about', [AboutUsController::class, 'index'])->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::view('/history', 'history')->name('history');

require __DIR__ . '/auth.php';
