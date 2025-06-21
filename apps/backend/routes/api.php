<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

Route::prefix('materials')->group(function () {
    Route::get('/', [MaterialController::class, 'index']);         // Listar 
    Route::get('/{id}', [MaterialController::class, 'show']);      // Buscar por ID
    Route::post('/', [MaterialController::class, 'store']);        // Criar
    Route::put('/{id}', [MaterialController::class, 'update']);    // Atualizar
    Route::delete('/{id}', [MaterialController::class, 'destroy']); // Remover
});
Route::fallback(function () {
    return response()->json(['message' => 'Rota não encontrada.'], 404);
});