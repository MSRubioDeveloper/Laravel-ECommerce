<?php

namespace App\Http\Controllers;

use App\Services\ProductosService;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    private ProductosService $ProductosServcie;
    //DI
    public function __construct( 
        ProductosService $productosService
    ) {
        $this->ProductosServcie = $productosService;
    }

    public function getAllProducts(){
        return $this->ProductosServcie->getAllProducts();

    }

    //ADD
    public function addNewProduct(Request $request){

         $data = $request->json()->all();
        return $data;
    }

 
}
