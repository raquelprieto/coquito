<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DETALLE_CLIENTES_PRODUCTOS', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->text('producto');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('factura');
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
        Schema::dropIfExists('usuarios');
    }
}
