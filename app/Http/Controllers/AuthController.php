<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{   

    private AuthService $authService;
    //DI
    public function __construct( 
        AuthService $authService
    ) {
        $this->authService = $authService;
    }

    public function login(){
        return $this->authService->login("hola");

    }

    public function register(){
        return "registrate...";
    }
}
