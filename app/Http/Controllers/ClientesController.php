<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Services\ClientesService;


class ClientesController extends Controller
{
    private ClientesService $clientesService;
    //DI
    public function __construct( 
        ClientesService $clientesService
    ) {
        $this->clientesService = $clientesService;
    }

    public function getAllClientes(){
        return $this->clientesService->getAllClients();

    }

    //search client
    public function getCliente(String $id){

        $cliente = Cliente::find($id);
        return $cliente;
    }
}
