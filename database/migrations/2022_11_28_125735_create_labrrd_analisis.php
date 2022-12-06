<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabrrdAnalisis extends Migration
{
    private $tablaxxx = 'labrrd_analisis';

    public function up()
    {
        Schema::create('labrrd_analisis', function (Blueprint $table) {
            $table->integer('labrrd_id')->unsigned()->comment('VALORACION LABORATORIOS RRD');
            $table->integer('labrrd_componente_id')->unsigned()->comment('RELACION COMPONENTES');
            $table->tinyInteger('respuesta')->comment('RESPUESTA VALOR');
            $table->timestamps();

            $table->foreign('labrrd_id')->references('id')->on('labrrds');
            $table->foreign('labrrd_componente_id')->references('id')->on('labrrd_componentes');
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
