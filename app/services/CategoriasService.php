<?php


namespace App\Services;

use App\Models\Categoria;
use App\Models\Producto;

class CategoriasService {

    public function getAllCategories(){

        $categorias = Categoria::all();
        return $categorias;
    }




}