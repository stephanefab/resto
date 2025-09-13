<?php

use App\Http\Controllers\RestoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/restos', [RestoController::class, 'index'])->name('restos.index');
Route::get('/restos/create', [RestoController::class, 'create'])->name('restos.create');
Route::get('/restos/{id}', [RestoController::class, 'show'])->name('restos.show');
Route::post('/restos', [RestoController::class, 'store'])->name('restos.store');