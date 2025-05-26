<?php

use App\Http\Controllers\PaisController;

Route::get('/', [PaisController::class, 'index'])->name('paises.index');
Route::get('/pais/{id}', [PaisController::class, 'show'])->name('paises.show');

