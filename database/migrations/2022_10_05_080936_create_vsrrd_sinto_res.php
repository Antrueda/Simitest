<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsrrdSintoRes extends Migration
{
    private $tablaxxx = 'vsrrd_sinto_res';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vsrrd_id')->unsigned()->comment('VALORACION RDD');
            $table->integer('vsrrd_Sintoma_id')->unsigned()->comment('SINTOMAS');
            $table->tinyInteger('respuesta')->unsigned()->comment('respuesta');
            $table->timestamps();

            $table->foreign('vsrrd_id')->references('id')->on('vsrrds');
            $table->foreign('vsrrd_Sintoma_id')->references('id')->on('vsrrd_sintomas');
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
