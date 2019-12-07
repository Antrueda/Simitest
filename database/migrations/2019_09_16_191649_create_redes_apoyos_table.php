<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedesApoyosTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('redes_apoyos', function (Blueprint $table){
      $table->bigIncrements('id');
      
      $table->bigInteger('entidadAtiende_id')->unsigned();
      $table->bigInteger('ServPrestados_id')->unsigned();
      $table->integer('tiempoBeneficio');
      $table->bigInteger('duracion_id')->unsigned();
      $table->bigInteger('tiempoPrestacion_id')->unsigned();
      $table->bigInteger('tipoRed_id')->unsigned();
      $table->bigInteger('tipoRedPersona_id')->unsigned();
      $table->string('nombrePersona');
      $table->bigInteger('servBenePersona_id')->unsigned();
      $table->bigInteger('entidadAtiendeActual_id')->unsigned();
      $table->bigInteger('durTiempoBen_id')->unsigned();
      $table->bigInteger('anioPrestServicio_id')->unsigned();
      $table->string('telApoyo');
      $table->string('dirApoyo');
      
      $table->foreign('entidadAtiende_id')->references('id')->on('parametros');
      $table->foreign('ServPrestados_id')->references('id')->on('parametros');
      $table->foreign('duracion_id')->references('id')->on('parametros');
      $table->foreign('tiempoPrestacion_id')->references('id')->on('parametros');
      $table->foreign('tipoRed_id')->references('id')->on('parametros');
      $table->foreign('tipoRedPersona_id')->references('id')->on('parametros');
      $table->foreign('entidadAtiendeActual_id')->references('id')->on('parametros');
      $table->foreign('durTiempoBen_id')->references('id')->on('parametros');
      $table->foreign('anioPrestServicio_id')->references('id')->on('parametros');
      $table->foreign('servBenePersona_id')->references('id')->on('parametros');

      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->boolean('estado');
      $table->timestamps();
      
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('redes_apoyos');
  }
}
