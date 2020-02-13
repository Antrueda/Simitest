<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsdViolenciasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('csd_violencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_condicion_id')->unsigned();
            $table->bigInteger('departamento_cond_id')->unsigned()->nullable();
            $table->bigInteger('municipio_cond_id')->unsigned()->nullable();
            $table->bigInteger('prm_certificado_id')->unsigned()->nullable();
            $table->bigInteger('departamento_cert_id')->unsigned()->nullable();
            $table->bigInteger('municipio_cert_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_condicion_id')->references('id')->on('parametros');
            $table->foreign('departamento_cond_id')->references('id')->on('sis_departamentos');
            $table->foreign('municipio_cond_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_certificado_id')->references('id')->on('parametros');
            $table->foreign('departamento_cert_id')->references('id')->on('sis_departamentos');
            $table->foreign('municipio_cert_id')->references('id')->on('sis_municipios');
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
        Schema::dropIfExists('csd_violencias');
    }
}