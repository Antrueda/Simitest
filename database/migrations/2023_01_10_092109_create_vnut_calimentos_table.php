<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVnutCalimentosTable extends Migration
{
    private $tablaxxx = 'vnut_calimentos';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vnutricion_id')->unsigned()->comment('CAMPO ID DE VALORACION NUTRICIONAL');
            $table->integer('prm_alimentos')->unsigned()->comment('PARAMETRO ALIMENTO');
            $table->integer('prm_frecuencia')->unsigned()->comment('PARAMETRO RESPUESTA FRECUENCIA');
            $table->timestamps();

            $table->foreign('vnutricion_id')->references('id')->on('vnutricions');
            $table->foreign('prm_alimentos')->references('id')->on('parametros');
            $table->foreign('prm_frecuencia')->references('id')->on('parametros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
