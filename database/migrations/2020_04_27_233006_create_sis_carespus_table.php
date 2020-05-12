<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisCaRespusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * TABLA QUE ALMACENA LAS RESPUESTA DEL DE CADA UNO DE LOS DOCUMENTOS
         */
        Schema::create('sis_carespus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_tcampo_id')->unsigned()->comment('PREGUNTA A LA QUE PERTENECE LA RESPUESTA');
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            
            $table->foreign('sis_tcampo_id')->references('id')->on('sis_tcampos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_carespus');
    }
}
