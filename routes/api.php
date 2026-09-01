<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

//http://127.0.0.1:8000/api/login

//http://127.0.0.1:8000/api/registe


//RUTAS PUBLICAS
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


// RUTAS PROTEGIDAS

//http://127.0.0.1:8000/api/me --> Obtiene la información del usuario autenticado

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});