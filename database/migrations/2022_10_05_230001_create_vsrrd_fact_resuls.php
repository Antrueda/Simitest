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
            $table->integer('vsrrd_entorno_id')->unsigned()->comment('RELACION ENTORNO');
            $table->integer('respuesta')->unsigned()->comment('RELACION A FACTOR');
            $table->timestamps();

            $table->foreign('vsrrd_id')->references('id')->on('vsrrds');
            $table->foreign('vsrrd_entorno_id')->references('id')->on('vsrrd_entornos');
            $table->foreign('respuesta')->references('id')->on('vsrrd_factores');
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
