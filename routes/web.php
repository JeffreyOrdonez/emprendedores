<?php


use App\Http\Controllers\iniciocontroller;
use App\Http\Controllers\feriascontroller;
use App\Http\Controllers\emprendedorcontroller;
use App\Http\Controllers\calendariocontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth', 'verified'])->group(function()
{
route::resource('ferias', feriascontroller::class);
route::resource('emprendedores', emprendedorcontroller::class);
route::resource('calendario', calendariocontroller::class);
route::resource('inicio', iniciocontroller::class);
});
Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
