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

Route::delete('/productos/{id}', [HomeController::class,'destroy'])->name('productos.destroy');
Route::post('/dashboard', [HomeController::class, 'store'])->name('dashboard');
Route::get('/productos/{id}/photo', [HomeController::class, 'photo'])->name('productos.photo');

Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/coop', function () {
    return view('coop');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
