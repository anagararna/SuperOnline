<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('init');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/productList', [HomeController::class, 'productList'])->name('productList');

Route::get('/form', function () {
    return view('layouts.form')->with('layout', 'form');
})->name('form');



Route::get('/dashboard',[HomeController::class, 'listadoDash'])->middleware(['auth', 'verified'])->name('dashboard')
->middleware(['auth', 'verified'])->name('dashboard');
Route::delete('/dashboard.destroy/{id}', [HomeController::class,'destroy'])->name('dashboard.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
