<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HerramientaCarritoController;
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\UserController;
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

Route::group(['prefix' => 'v1'], function(){

    Route::post('registrarse', [
        RegisterController::class, 'register'
    ]);

    Route::post('iniciarSesion', [
        AuthController::class, 'login'
    ]);

    Route::get('buscar/{termino}',[
        HerramientaController::class, 'search'
    ]);
    
    Route::post('cerrarSesion', [
        AuthController::class, 'logout'
    ])->middleware('auth:sanctum');

    Route::get('usuario',[
        UserController::class, 'getUsuario'
    ])->middleware('auth:sanctum');
    
    Route::post('crear-carrito', [
        CarritoController::class, 'store'
    ])->middleware('auth:sanctum');

    Route::get('mostrar-carrito',[
        CarritoController::class, 'show'
    ])->middleware('auth:sanctum');

    Route::post('agregar-producto-carrito/{idHerramienta}', [
        HerramientaCarritoController::class, 'store'
    ])->middleware('auth:sanctum');

    Route::post('eliminar-producto-carrito/{id}', [
        HerramientaCarritoController::class, 'destroy'
    ])->middleware('auth:sanctum');

    Route::post('herramientas/{id}/fotos', [
        FotoController::class, 'store'
    ]);

    Route::apiResource('fotos', FotoController::class);

    Route::apiResource('herramientas', HerramientaController::class);


});
