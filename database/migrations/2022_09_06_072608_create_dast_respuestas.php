<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDastRespuestas extends Migration
{
    private $tablaxxx = 'dast_respuestas';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('dast_id')->unsigned()->comment('RELACION CUESTIONARIO DAST');
            $table->integer('dast_pregunta_id')->unsigned()->comment('RELACION A DAST PREGUNTA');
            $table->boolean('respuesta')->comment('VALOR SI / NO');
            $table->timestamps();

            $table->foreign('dast_id')->references('id')->on('dasts');
            $table->foreign('dast_pregunta_id')->references('id')->on('dast_preguntas');
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
