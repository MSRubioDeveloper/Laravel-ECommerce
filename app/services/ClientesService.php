<?php


namespace App\Services;

use App\Models\Categoria;
use App\Models\Cliente;

class ClientesService {

    public function getAllClients(){

        $clientes = Cliente::all();
        return $clientes;
    }




}