<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PeliculaController::class, 'index']);

Route::post('/guardar', [PeliculaController::class, 'store']);
