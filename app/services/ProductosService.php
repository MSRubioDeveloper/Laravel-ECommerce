<?php


namespace App\Services;

use App\Models\Producto;

class ProductosService {

    public function getAllProducts(){

        $productos = Producto::all();
        return $productos;
    }




}