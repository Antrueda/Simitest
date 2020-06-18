<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisTcamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /**
     * TABLA QUE ALMACENA LOS NOBRES DE LOS CAMPOS QUE TIENEN LAS TABLAS DEL SISTEMA
     */
    Schema::create('sis_tcampos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('s_campo')->comment('NOMOBRE DEL CAMPO');
        $table->string('s_numero')->comment('NUMERO DE LA PREGUNTA EN EL DOCUMENTO FISICO');
        $table->bigInteger('sis_tabla_id')->unsigned()->comment('TABLA EN QUE ES ENCUENTRA EL CAMPO');
        $table->bigInteger('in_pregunta_id')->unsigned()->comment('PREGUNTA CON LA QUE SE ENCUENTRA ASOCIADO EL CAMPO');
        $table->bigInteger('tema_id')->unsigned()->comment('TEMA EN EL QUE ESTAN ASOCIADAS LAS RES PUESTAS DE LA PREGUNTA');
        $table->bigInteger('user_crea_id')->unsigned();
        $table->bigInteger('user_edita_id')->unsigned();
        $table->bigInteger('sis_esta_id')->unsigned()->default(1);
        $table->timestamps();

        $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
        $table->foreign('user_crea_id')->references('id')->on('users');
        $table->foreign('user_edita_id')->references('id')->on('users');
        $table->foreign('sis_tabla_id')->references('id')->on('sis_tablas');
        $table->foreign('in_pregunta_id')->references('id')->on('in_preguntas');
        $table->foreign('tema_id')->references('id')->on('temas');
        //$table->unique(['sis_tabla_id','in_pregunta_id','tema_id']);


      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_tcampos');
    }
}
