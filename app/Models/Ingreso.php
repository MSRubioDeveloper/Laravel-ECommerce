<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;


     //RECUPERAR usuario
     public function usuario(){
        return $this->belongsTo("App\Models\Usuario", "usuario_id");
    }
     //RECUPERAR Producto 
     public function producto(){
        return $this->belongsTo("App\Models\Producto", "producto_id");
    }

    //Recuperar provedor
     public function provedor(){
        return $this->belongsTo("App\Models\Provedore", "provedores_id");
    }
}
