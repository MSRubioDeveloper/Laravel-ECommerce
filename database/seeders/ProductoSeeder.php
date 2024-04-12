<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->Nombre_del_producto = "Samsung Galaxy S8";
        $producto->Stock = 24;
        $producto->Imagen_el_producto = "https://www.ephotozine.com/articles/samsung-galaxy-s8-review-30876/images/highres-Samsung-Galaxy-S8-in-hand_1493044377.jpg";
        $producto->Calificacion = 4.5;

        $producto2 = new Producto();
        $producto2->Nombre_del_producto = "iPhone pro 15 max";
        $producto2->Stock = 11;
        $producto2->Imagen_el_producto = "https://phonetechx.com/wp-content/uploads/2022/09/iPhone-15-Pro-Max-1.jpg";
        $producto2->Calificacion = 4.8;


        $producto3 = new Producto();
        $producto3->Nombre_del_producto = "Samsung A32";
        $producto3->Stock = 67;
        $producto3->Imagen_el_producto = "https://images5.tanganetwork.com/prod?bucket=tanga-fetched-images-prod&filename=b08193bb23be224617861fc2.png&width=1270&height=1270&quality=90";
        $producto3->Calificacion = 3.2;

    }
}
