<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabrrdSegHabilis extends Migration
{
    private $tablaxxx = 'labrrd_seg_habilis';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('labrrd_seg_id')->unsigned()->comment('SEGUIMIENTO LABORATORIOS RRD');
            $table->integer('prm_habilidad_id')->unsigned()->comment('PARAMETROS HABILIDAD A TRABAJAR');
            $table->timestamps();

            $table->foreign('labrrd_seg_id')->references('id')->on('labrrd_segs');
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
