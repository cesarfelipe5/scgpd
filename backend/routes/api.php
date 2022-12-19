<?php

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ItemOrdemServicoController;
use App\Http\Controllers\OrdemServicoController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\TipoPagamentoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VeiculoController;
use App\Models\ServicoPrestado;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user/{id}', [UserController::class, 'show']);


Route::prefix('client')->group(function () {
    Route::get('', [ClienteController::class, 'index']);
    Route::get('/list', [ClienteController::class, 'list']);
    Route::get('/{id}', [ClienteController::class, 'show']);
    Route::post('', [ClienteController::class, 'store']);
    Route::put('/{id}', [ClienteController::class, 'update']);
    Route::delete('/{id}', [ClienteController::class, 'destroy']);
});

Route::prefix('vehicle')->group(function () {
    Route::get('', [VeiculoController::class, 'index']);
    Route::get('/list', [VeiculoController::class, 'list']);
    Route::get('/{id}', [VeiculoController::class, 'show']);
    Route::post('', [VeiculoController::class, 'store']);
    Route::put('/{id}', [VeiculoController::class, 'update']);
    Route::delete('/{id}', [VeiculoController::class, 'destroy']);
});

Route::prefix('itemServiceOrder')->group(function () {
    Route::get('', [ItemOrdemServicoController::class, 'index']);
    Route::get('/list', [ItemOrdemServicoController::class, 'list']);
    Route::get('/{id}', [ItemOrdemServicoController::class, 'show']);
    Route::post('', [ItemOrdemServicoController::class, 'store']);
    Route::put('/{id}', [ItemOrdemServicoController::class, 'update']);
    Route::delete('/{id}', [ItemOrdemServicoController::class, 'destroy']);
});

Route::prefix('serviceOrder')->group(function () {
    Route::get('', [OrdemServicoController::class, 'index']);
    Route::get('/list', [OrdemServicoController::class, 'list']);
    Route::get('/{id}', [OrdemServicoController::class, 'show']);
    Route::post('', [OrdemServicoController::class, 'store']);
    Route::put('/{id}', [OrdemServicoController::class, 'update']);
    Route::delete('/{id}', [OrdemServicoController::class, 'destroy']);
});

Route::prefix('payment')->group(function () {
    Route::get('', [PagamentoController::class, 'index']);
    Route::get('/list', [PagamentoController::class, 'list']);
    Route::get('/{id}', [PagamentoController::class, 'show']);
    Route::post('', [PagamentoController::class, 'store']);
    Route::put('/{id}', [PagamentoController::class, 'update']);
    Route::delete('/{id}', [PagamentoController::class, 'destroy']);
});

Route::prefix('serviceProvided')->group(function () {
    Route::get('', [ServicoPrestado::class, 'index']);
    Route::get('/list', [ServicoPrestado::class, 'list']);
    Route::get('/{id}', [ServicoPrestado::class, 'show']);
    Route::post('', [ServicoPrestado::class, 'store']);
    Route::put('/{id}', [ServicoPrestado::class, 'update']);
    Route::delete('/{id}', [ServicoPrestado::class, 'destroy']);
});

Route::prefix('paymentType')->group(function () {
    Route::get('', [TipoPagamentoController::class, 'index']);
    Route::get('/list', [TipoPagamentoController::class, 'list']);
    Route::get('/{id}', [TipoPagamentoController::class, 'show']);
    Route::post('', [TipoPagamentoController::class, 'store']);
    Route::put('/{id}', [TipoPagamentoController::class, 'update']);
    Route::delete('/{id}', [TipoPagamentoController::class, 'destroy']);
});

Route::prefix('city')->group(function () {
    Route::get('/list', [CidadeController::class, 'list']);
});


Route::prefix('user')->group(function () {
    Route::post('', [UserController::class, 'store']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('', [UserController::class, 'index']);
    });
});
