<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("SKU", 150);
            $table->string("Nombre", 150);
            $table->integer("Stock");
            $table->string("Imagen",350);
            $table->decimal("Calificacion", 3, 1);

            //Relacion categorias
            $table->unsignedBigInteger("categorias_id")->nullable();
            $table->foreign("categorias_id")->references("id")->on("categorias")
            ->onDelete("set null")
            ->onUpdate("cascade");
            
            //Relacion con ventas
            $table->unsignedBigInteger("ventas_id")->nullable();
            $table->foreign("ventas_id")->references("id")->on("ventas")
            ->onDelete("set null")
            ->onUpdate("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
