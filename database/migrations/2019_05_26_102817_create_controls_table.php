<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->increments('id_control');

            $table->integer('id_paciente')->unsigned();
            $table->longText('motivo_consulta');
            $table->longText('hea');
            $table->longText('examen_fisico');
            $table->longText('examen_complementario');
            $table->longText('impresion_diagnostica');
            $table->longText('conducta_seguir');

  // relacion

            $table->foreign('id_paciente')->references('id')->on('pacientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('controls');
    }
}
