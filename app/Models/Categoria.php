<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //categoria
    public function ingreso(){
        return $this->hasMany(Ingreso::class, "provedores_id");
    }
}
