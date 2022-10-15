<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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


Route::prefix('cliente')->group(function () {
    Route::get('', [ClienteController::class, 'index']);
    Route::get('/list', [ClienteController::class, 'list']);
    Route::get('/{id}', [ClienteController::class, 'show']);
    Route::post('', [ClienteController::class, 'store']);
    Route::put('/{id}', [ClienteController::class, 'update']);
    Route::delete('/{id}', [ClienteController::class, 'destroy']);
});


// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/', function () {
//         //
//     });
// });
