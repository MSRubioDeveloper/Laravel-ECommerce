<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->string("Folio", 150);
            $table->dateTime("Fecha");
            $table->decimal("Total Monetario", 10, 2);
            $table->decimal("Total Cantidad", 10, 2);
            

            // Relaciones
            //relacion 1: usuario_id
            $table->unsignedBigInteger("usuario_id")->nullable();
            $table->foreign("usuario_id")->references("id")->on("usuarios")
            ->onDelete("set null")
            ->onUpdate("cascade");
            //relacion 2: Productos_id
            $table->unsignedBigInteger("producto_id")->nullable();
            $table->foreign("producto_id")->references("id")->on("productos")
            ->onDelete("set null")
            ->onUpdate("cascade");

            //relacion 3: Provedores_id
            $table->unsignedBigInteger("provedores_id")->nullable();
            $table->foreign("provedores_id")->references("id")->on("provedores")
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
        Schema::dropIfExists('ingresos');
    }
}
