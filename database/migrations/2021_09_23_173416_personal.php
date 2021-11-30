<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Actividad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->text('id_detalle');
            $table->integer('id_cargo');
            $table->text('nombre');
            $table->text('apellido');
            $table->text('direccion');
            $table->text('celular');
            $table->text('fecha_nacimiento');
            $table->text('genero');
            $table->text('fecha_ingreso');
            $table->text('estado');
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
        Schema::dropIfExists('actividad');
    }
}
