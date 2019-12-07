<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisActividadsTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('sis_actividads', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nombre');
      $table->bigInteger('sis_documento_fuente_id')->unsigned();
      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->boolean('activo')->default(1);
      $table->timestamps();
      $table->engine = 'InnoDB';
      $table->foreign('user_crea_id')->references('id')->on('users');
      $table->foreign('user_edita_id')->references('id')->on('users');
      $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');
      $table->unique(['nombre','sis_documento_fuente_id']);
      
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('sis_actividads');
  }
}
