<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PontoTuristicoController;

Route::get('/pontos-turisticos', [PontoTuristicoController::class, 'index']);
Route::get('/pontos-turisticos/{id}', [PontoTuristicoController::class, 'show']);
