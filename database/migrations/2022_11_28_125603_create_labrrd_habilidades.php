<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabrrdHabilidades extends Migration
{
    private $tablaxxx = 'labrrd_habilidades';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('labrrd_id')->unsigned()->comment('VALORACION LABORATORIOS RRD');
            $table->integer('prm_habilidad_id')->unsigned()->comment('PARAMETROS HABILIDAD A TRABAJAR');
            $table->timestamps();

            $table->foreign('labrrd_id')->references('id')->on('labrrds');
            $table->foreign('prm_habilidad_id')->references('id')->on('parametros');
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
