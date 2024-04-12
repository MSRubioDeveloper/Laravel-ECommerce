<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //semilla para llenar tablas
        // \App\Models\User::factory(10)->create();

        //  $this->call(CategoriaSeeder::class);
        $Categoria = new Categoria();
        $Categoria->Nombre_de_la_categoria = "Celulares";
        $Categoria->Descripccion_de_la_categoria = "Categoria destinada a ceulares actuales en venta de la e-commerce";
        $Categoria->save();

        $Categoria2 = new Categoria();
        $Categoria2->Nombre_de_la_categoria = "Televisiones";
        $Categoria2->Descripccion_de_la_categoria = "Categoria destinada a Televisiones actuales en venta de la e-commerce";
        $Categoria2->save();

        $Categoria3 = new Categoria();
        $Categoria3->Nombre_de_la_categoria = "Computadoras";
        $Categoria3->Descripccion_de_la_categoria = "Categoria destinada a Computadoras actuales en venta de la e-commerce";
        $Categoria3->save();

    }
}
