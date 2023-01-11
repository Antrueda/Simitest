<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVnutRenfermedadesTable extends Migration
{
    private $tablaxxx = 'vnut_renfermedades';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vnutricion_id')->unsigned()->comment('CAMPO ID DE VALORACION NUTRICIONAL');
            $table->integer('asigna_enfermedad_id')->unsigned()->comment('RELACION ASIGNA ENFERMEDADES');
            $table->timestamps();

            $table->foreign('vnutricion_id')->references('id')->on('vnutricions');
            $table->foreign('asigna_enfermedad_id')->references('id')->on('asigna_enfermedads');
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
