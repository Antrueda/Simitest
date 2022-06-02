<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgihResultados extends Migration
{

    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cgih_resultados', function (Blueprint $table) {
            $table->integer('cgih_cuestionario_id')->unsigned()->comment('CUESTIONARIO GUSTOS');
            $table->integer('cgih_habilidad_id')->unsigned()->comment('CUESTIONARIO GUSTOS HABILIDAD');
            $table->timestamps();

            $table->foreign('cgih_cuestionario_id')->references('id')->on('cgih_cuestionarios');
            $table->foreign('cgih_habilidad_id')->references('id')->on('cgih_habilidads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cgih_resultados');
    }
}
