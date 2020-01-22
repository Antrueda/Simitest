<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiSaludsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_saluds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_atencion_id')->unsigned();
            $table->bigInteger('prm_condicion_id')->unsigned()->nullable();
            $table->bigInteger('prm_medicamento_id')->unsigned();
            $table->bigInteger('prm_prescripcion_id')->unsigned()->nullable();
            $table->bigInteger('prm_sexual_id')->unsigned();
            $table->bigInteger('prm_activa_id')->unsigned()->nullable();
            $table->bigInteger('prm_embarazo_id')->unsigned()->nullable();
            $table->bigInteger('prm_hijo_id')->unsigned()->nullable();
            $table->bigInteger('prm_interrupcion_id')->unsigned()->nullable();
            $table->string('medicamento')->nullable();
            $table->string('descripcion', 4000)->nullable();
            $table->integer('edad')->unsigned()->nullable();
            $table->integer('embarazo')->unsigned()->nullable();
            $table->integer('hijo')->unsigned()->nullable();
            $table->integer('interrupcion')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_atencion_id')->references('id')->on('parametros');
            $table->foreign('prm_condicion_id')->references('id')->on('parametros');
            $table->foreign('prm_medicamento_id')->references('id')->on('parametros');
            $table->foreign('prm_prescripcion_id')->references('id')->on('parametros');
            $table->foreign('prm_sexual_id')->references('id')->on('parametros');
            $table->foreign('prm_activa_id')->references('id')->on('parametros');
            $table->foreign('prm_embarazo_id')->references('id')->on('parametros');
            $table->foreign('prm_hijo_id')->references('id')->on('parametros');
            $table->foreign('prm_interrupcion_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_saluds');
    }
}