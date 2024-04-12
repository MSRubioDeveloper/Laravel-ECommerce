<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

   
     //RECUPERAR categorias_id
     public function categoria(){
        return $this->belongsTo("App\Models\Categoria", "categorias_id");
    }
     //RECUPERAR ventas_id 
     public function venta(){
        return $this->belongsTo("App\Models\Venta", "ventas_id");
    }


      //Buscar Ingreso del usuario
       //categoria
       public function ingreso(){
        return $this->hasMany(Ingreso::class, "producto_id");
    }
}
