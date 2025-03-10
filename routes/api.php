<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('categoria')->group(function () {
    Route::post('/registrar', [CategoriaController::class, 'register']);
    Route::put('/actualizar/{id}', [CategoriaController::class, 'update']);
    Route::get('/obtener/{id}', [CategoriaController::class, 'getById']);
    Route::get('/data', [CategoriaController::class, 'getData']);
    Route::delete('/eliminar/{id}', [CategoriaController::class, 'deleteById']);
});