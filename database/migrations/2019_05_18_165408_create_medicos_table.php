<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {

            $table->increments('id');

            $table->string('cedula',10)->unique();

            $table->string('nombre',50);
            $table->string('foto')->nullable();
            $table->string('codigo_medico',20);
            $table->string('especialidad',50);
            $table->string('cargo',20);
            $table->longText('observaciones')->nullable();
            $table->string('telefono',14);
            $table->string('correo',100)->nullable();;
            $table->longText('otros')->nullable();

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
        Schema::dropIfExists('medicos');
    }
}
