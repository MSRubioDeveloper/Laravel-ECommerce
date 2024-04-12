<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categoria = new Categoria();
        $Categoria->Nombre_de_la_categoria = "Celulares";
        $Categoria->Descripccion_de_la_categoria = "Categoria destinada a ceulares actuales en venta de la e-commerce";
     

        $Categoria2 = new Categoria();
        $Categoria2->Nombre_de_la_categoria = "Televisiones";
        $Categoria2->Descripccion_de_la_categoria = "Categoria destinada a Televisiones actuales en venta de la e-commerce";

        $Categoria3 = new Categoria();
        $Categoria3->Nombre_de_la_categoria = "Computadoras";
        $Categoria3->Descripccion_de_la_categoria = "Categoria destinada a Computadoras actuales en venta de la e-commerce";
    }
}
