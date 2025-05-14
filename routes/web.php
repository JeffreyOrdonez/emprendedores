<?php


use App\Http\Controllers\iniciocontroller;
use App\Http\Controllers\feriacontroller;
use App\Http\Controllers\emprendedorcontroller;
use App\Http\Controllers\calendariocontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', [iniciocontroller::class, 'index']);


Route::get('/feria', [feriacontroller::class, 'index']);


Route::get('/emprendedores', [emprendedorcontroller::class, 'index']);


Route::get('/calendario', [calendariocontroller::class, 'index']);










Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
