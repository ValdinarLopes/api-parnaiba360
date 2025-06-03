<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PontoTuristicoController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::get('/pontos-turisticos', [PontoTuristicoController::class, 'index']);
Route::get('/pontos-turisticos/{id}', [PontoTuristicoController::class, 'show']);
