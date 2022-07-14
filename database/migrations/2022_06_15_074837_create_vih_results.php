<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVihResults extends Migration
{
    private $tablaxxx = 'vih_results';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vih_id')->unsigned()->comment('Valaracion e ident habilidades');
            $table->integer('vih_subarea_id')->unsigned()->comment('SUBAREA A EVALUAR');
            $table->integer('prm_respuesta')->unsigned()->comment('respuesta');
            $table->timestamps();

            $table->foreign('vih_id')->references('id')->on('vihs');
            $table->foreign('vih_subarea_id')->references('id')->on('vih_subareas');
            $table->foreign('prm_respuesta')->references('id')->on('parametros');
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
