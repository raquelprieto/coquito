<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pregunta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deudas_clientes', function (Blueprint $table) {
            $table->id();
            $table->text('id_dettalle');
            $table->integer('id_forma_pago');
            $table->float('monte_deuda');
            $table->date('fecha');
            $table->integer('personal_idpersonal');
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
        Schema::dropIfExists('pregunta');
    }
}
