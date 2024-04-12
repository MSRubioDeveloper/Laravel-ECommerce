<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //RECUPERAR VENTA DEL CLIENTE
    public function ventas(){
        return $this->hasMany("App\Models\Venta", "cliente_id");
    }
}
