<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiConceptosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_conceptos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->string('concepto', 4000);
            $table->bigInteger('prm_ingreso_id')->unsigned()->nullable();
            $table->string('porque', 4000)->nullable();
            $table->string('cual', 120)->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_ingreso_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_concep_red', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_concepto_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_concepto_id')->references('id')->on('vsi_conceptos');
            $table->unique(['parametro_id', 'vsi_concepto_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_concep_red');
        Schema::dropIfExists('vsi_conceptos');
    }
}