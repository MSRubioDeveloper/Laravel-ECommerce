<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;




//GRUPO DE AUTH
Route::name("auth")->prefix("api/auth")->group(function($router){
    Route::get('/login', [AuthController::class, "login"]);
    Route::get('/register', [AuthController::class, "register"]);
});