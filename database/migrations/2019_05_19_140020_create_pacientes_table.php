<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre',50);
            $table->date('fecha_nac');
            $table->string('cedula')->unique();
            $table->string('num_historia')->unique();
            $table->string('sexo');
            $table->longText('direccion')->nullable();
            $table->longText('telefono',14)->nullable();
            $table->longText('foto')->nullable();
            $table->longText('app')->nullable();
            $table->longText('apf')->nullable();
            $table->longText('grupo_sangre',3)->nullable();
            $table->longText('rh')->nullable();
            $table->longText('vacunacion')->nullable();
            $table->longText('reaccion_med')->nullable();
            $table->longText('alergias')->nullable();
            $table->longText('piel')->nullable();
            $table->longText('etnia')->nullable();
            $table->longText('cafe')->nullable();
            $table->longText('tabaco')->nullable();
            $table->longText('alcohol')->nullable();
            $table->longText('otros')->nullable();
            $table->longText('trans_sangre')->nullable();
            $table->longText('accidentes')->nullable();
            $table->longText('traumatismos')->nullable();
            $table->longText('operaciones')->nullable();
            $table->longText('menarquia')->nullable();
            $table->longText('embarazos')->nullable();
            $table->longText('menstrual')->nullable();
            $table->longText('partos')->nullable();
            $table->longText('abortos')->nullable();
            $table->longText('menopausia')->nullable();
            $table->longText('citologia')->nullable();

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
        Schema::dropIfExists('pacientes');
    }
}
