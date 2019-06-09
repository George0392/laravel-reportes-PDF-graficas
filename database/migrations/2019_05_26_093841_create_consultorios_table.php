<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultorios', function (Blueprint $table) {
            $table->increments('id');


            $table->string('nombre',100)->nullable();
            $table->string('direccion',500)->nullable();
            $table->string('telefono',14)->nullable();
            $table->string('municipio',100)->nullable();
            $table->string('parroquia',100)->nullable();
            $table->string('estado')->nullable();
            $table->longText('asic')->nullable();
            $table->longText('familia')->nullable();

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
        Schema::dropIfExists('consultorios');
    }
}
