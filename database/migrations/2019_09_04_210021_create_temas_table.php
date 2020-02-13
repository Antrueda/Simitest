<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('temas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nombre')->unique();
      $table->bigInteger('user_crea_id')->unsigned(); 
      $table->bigInteger('user_edita_id')->unsigned();
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();
      
    });

    Schema::create('parametro_tema', function (Blueprint $table) {
      $table->bigInteger('parametro_id')->unsigned();
      $table->bigInteger('tema_id')->unsigned();
      $table->bigInteger('user_crea_id')->unsigned(); 
      $table->bigInteger('user_edita_id')->unsigned();
      $table->foreign('parametro_id')->references('id')->on('parametros');
      $table->foreign('tema_id')->references('id')->on('temas');
      $table->unique(['parametro_id', 'tema_id']);
      
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('parametro_tema');
    Schema::dropIfExists('temas');
  }
}
