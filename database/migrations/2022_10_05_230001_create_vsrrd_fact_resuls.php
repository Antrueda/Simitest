<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsrrdFactResuls extends Migration
{
    private $tablaxxx = 'vsrrd_fact_resuls';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vsrrd_id')->unsigned()->comment('VALORACION RDD');
            $table->integer('vsrrd_entor_fact_id')->unsigned()->comment('RELACION ENTORNO FACTOR');
            $table->tinyInteger('escala')->unsigned()->comment('respuesta');
            $table->timestamps();

            $table->foreign('vsrrd_id')->references('id')->on('vsrrds');
            $table->foreign('vsrrd_entor_fact_id')->references('id')->on('vsrrd_entor_factors');
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
