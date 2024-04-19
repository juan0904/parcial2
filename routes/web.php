<?php

use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\ObraController;
use Illuminate\Support\Facades\Route;


Route::get('/artista', [ArtistaController:: class, 'index'])->name('artista.index');;
Route::post('/artista', [ArtistaController::class, 'store'])->name('artista.store');
Route::get('/artista/create', [ArtistaController::class, 'create'])->name('artista.create');
Route::delete('/artista/{artista}', [ArtistaController::class, 'destroy'])->name('artista.destroy');
Route::put('/artista/{artista}', [ArtistaController::class, 'update'])->name('artista.update');
Route::get('/artista/{artista}/edit', [ArtistaController::class , 'edit'])->name('artista.edit');


Route::get('/obras', [ObraController:: class, 'index'])->name('obras.index');
Route::post('/obras', [ObraController::class, 'store'])->name('obras.store');
Route::get('/obras/create', [ObraController::class, 'create'])->name('obras.create');
Route::delete('/obras/{obra}', [ObraController::class, 'destroy'])->name('obras.destroy');
Route::put('/obras/{obra}', [ObraController::class, 'update'])->name('obras.update');
Route::get('/obras/{obra}/edit', [ObraController::class , 'edit'])->name('obras.edit');


