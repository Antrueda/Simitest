<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_respuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_doc_pregunta_id')->unsigned();
            $table->bigInteger('i_prm_respuesta_id')->unsigned();
            $table->integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('i_prm_respuesta_id')->references('id')->on('parametros');
            $table->foreign('in_doc_pregunta_id')->references('id')->on('in_doc_preguntas');
            $table->unique(['i_prm_respuesta_id','in_doc_pregunta_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_respuestas');
    }
}
