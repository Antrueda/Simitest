<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInDocPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_doc_preguntas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_pregunta_id')->unsigned();
            $table->bigInteger('in_base_fuente_id')->unsigned();
            $table->bigInteger('sis_tabla_id')->unsigned();
            $table->bigInteger('sis_campo_tabla_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo');
            $table->timestamps();
            $table->foreign('sis_tabla_id')->references('id')->on('sis_tablas');
            $table->foreign('sis_campo_tabla_id')->references('id')->on('sis_campo_tablas');
            $table->foreign('in_pregunta_id')->references('id')->on('in_preguntas');
            $table->foreign('in_base_fuente_id')->references('id')->on('in_base_fuentes');
            $table->unique(['in_base_fuente_id','in_pregunta_id']);
            $table->engine = 'InnoDB';
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_doc_preguntas');
    }
}
