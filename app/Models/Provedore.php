<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedore extends Model
{
    use HasFactory;

    //categoria
    public function ingresos(){
        return $this->hasMany(Ingreso::class, "provedores_id");
    }
}
