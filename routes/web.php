<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'rol:admin,vendedor'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'rol:admin'])->group(function () {
    Route::get('/admin', function () {
        return "Bienvenido admin jijijija!";
    });
    Route::resource('productos', ProductoController::class);
});

Route::middleware(['auth', 'rol:vendedor'])->group(function () {
        Route::get('/vendedor', function () {
        return "Bienvenido vendedor jijijija!";
    });
});

require __DIR__.'/auth.php';
