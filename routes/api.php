<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar rutas para API. Se cargan automáticamente
| por RouteServiceProvider dentro del grupo "api".
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ruta para registrar usuarios desde API (opcional)
Route::post('/register', [UsuarioController::class, 'store']);
