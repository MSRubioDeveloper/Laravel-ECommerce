<?php

namespace App\Http\Controllers;

use App\Services\CategoriasService;
use App\Services\ProductosService;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    private CategoriasService $categoriasService;
    //DI
    public function __construct( 
        CategoriasService $categoriasService
    ) {
        $this->categoriasService = $categoriasService;
    }

    public function getAllCategories(){
        return $this->categoriasService->getAllCategories();

    }
}
