<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;


    //recuperar el cliente al buscar la venta
    public function cliente(){
        return $this->belongsTo("App\Models\Cliente");
        // $cliente = Cliente::find($this->cliente_id);
        // return $cliente;
    }
    
    //Recuperar 
    public function productos(){
         return $this->hasMany("App\Models\Producto", "ventas_id");
    }



}
