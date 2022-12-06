<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabrrdSegAnalis extends Migration
{
    private $tablaxxx = 'labrrd_seg_analis';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('labrrd_seg_id')->unsigned()->comment('SEGUIMIENTO LABORATORIOS RRD');
            $table->integer('labrrd_componente_id')->unsigned()->comment('RELACION COMPONENTES');
            $table->tinyInteger('respuesta')->comment('RESPUESTA VALOR');
            $table->timestamps();

            $table->foreign('labrrd_seg_id')->references('id')->on('labrrd_segs');
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
