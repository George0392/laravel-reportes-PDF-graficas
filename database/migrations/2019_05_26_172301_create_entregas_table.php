<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->increments('id_entrega');

            $table->integer('id_paciente')->unsigned();
            $table->integer('id_consultorio')->unsigned();
            $table->integer('id_medico')->unsigned();
            $table->integer('id_medicamento')->unsigned();
            $table->integer('cantidad')->unsigned();

            // relacion

            $table->foreign('id_paciente')->references('id')->on('pacientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // relacion

            $table->foreign('id_medico')->references('id')->on('medicos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // relacion

            $table->foreign('id_consultorio')->references('id')->on('consultorios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // relacion

            $table->foreign('id_medicamento')->references('id')->on('medicamentos')
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
        Schema::dropIfExists('entregas');
    }
}
