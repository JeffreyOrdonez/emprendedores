<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/inicio',function () {
    return view('inicio');
});

Route::get('/calendario',function(){
    return view('calendario');
});

Route::get('/', function () {
    return view('inicio');
});

Route::get('/feria',function(){
    return view('feria');
});

Route::get('/emprendedores',function(){
    return view('emprendedores');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
