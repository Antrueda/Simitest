<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabrrdGustos extends Migration
{
    private $tablaxxx = 'labrrd_gustos';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('labrrd_id')->unsigned()->comment('VALORACION LABORATORIOS RRD');
            $table->integer('prm_gusto_id')->unsigned()->comment('PARAMETROS GUSTOS E INTERESES');
            $table->timestamps();

            $table->foreign('labrrd_id')->references('id')->on('labrrds');
            $table->foreign('prm_gusto_id')->references('id')->on('parametros');
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
