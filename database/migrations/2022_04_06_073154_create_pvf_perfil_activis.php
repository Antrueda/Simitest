<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvfPerfilActivis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvf_perfil_activis', function (Blueprint $table) {
            $table->integer('pvf_perfil_voca_id')->unsigned()->comment('PERFIL VACACIONAL');
            $table->integer('pvf_actividad_id')->unsigned()->comment('PERFIL VACACIONAL ACTIVIDAD');
            $table->timestamps();

            $table->foreign('pvf_perfil_voca_id')->references('id')->on('pvf_perfil_vocas');
            $table->foreign('pvf_actividad_id')->references('id')->on('pvf_actividades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pvf_perfil_activis');
    }
}
