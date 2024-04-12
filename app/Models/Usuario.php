<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;


class Usuario extends Model
{
    //Auth
    protected $fillable = [

    ];


    use HasFactory;

    //Buscar Ingreso del usuario
       //categoria
       public function ingreso(){
        return $this->hasOne(Ingreso::class, "usuario_id");
    }
}
