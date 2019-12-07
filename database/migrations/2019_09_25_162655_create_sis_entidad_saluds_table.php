<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisEntidadSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_entidad_saluds', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('s_nombre_entidad');
            $table->bigInteger('i_prm_tentidad_id')->unsigned();
            $table->integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->boolean('activo');
            $table->timestamps();

            $table->foreign('i_prm_tentidad_id')->references('id')->on('parametros');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_entidad_saluds');
    }
}
