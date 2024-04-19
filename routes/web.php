<?php

use App\Http\Controllers\ArtistaController;
use Illuminate\Support\Facades\Route;


Route::get('/artista', [ArtistaController:: class, 'index'])->name('artista.index');;
Route::post('/artista', [ArtistaController::class, 'store'])->name('artista.store');
Route::get('/artista/create', [ArtistaController::class, 'create'])->name('artista.create');
Route::delete('/artista/{artista}', [ArtistaController::class, 'destroy'])->name('artista.destroy');
Route::put('/artista/{artista}', [ArtistaController::class, 'update'])->name('artista.update');
Route::get('/artista/{artista}/edit', [ArtistaController::class , 'edit'])->name('artista.edit');


