<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;

//GRUPO DE AUTH
Route::name("auth")->prefix("api/auth")->group(function($router){
    Route::get('/login', [AuthController::class, "login"]);
    Route::get('/register', [AuthController::class, "register"]);
});
Route::name("Aplicacion")->prefix("api")->group(function($router){
    //productos
    Route::get('/productos', [ProductosController::class, "getAllProducts"]);
    Route::post('/AddProducto', [ProductosController::class, "addNewProduct"]);

    //categorias
    Route::get('/categorias', [CategoriasController::class, "getAllCategories"]);

    //Clientes
    Route::get('/clientes', [ClientesController::class, "getAllClientes"]);
    Route::get('/clientes/{id}', [ClientesController::class, "getCliente"]);

    //get csrf-token
    Route::get('/csrf-token', function() {
        return response()->json(['csrf_token' => csrf_token()]);
    });

});
