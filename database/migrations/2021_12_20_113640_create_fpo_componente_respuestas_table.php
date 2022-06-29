<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFpoComponenteRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fpo_componente_respuestas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('observacion',4000)->nullable()->comment('ORSERVACION RESPUESTA COMPONENTE');
            $table->integer('fpo_componen_id')->unsigned()->comment('CAMPO ID DE TABLA FPO COMPONENTE DE DESEMPENIO');
            $table->foreign('fpo_componen_id')->references('id')->on('fpo_desempenio_componentes');
            $table->integer('fpo_perfil_id')->unsigned()->comment('CAMPO ID PERFIL OCUPACIONAL');
            $table->foreign('fpo_perfil_id')->references('id')->on('fpo_perfil_ocupacionals');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fpo_componente_respuestas');
    }
}
