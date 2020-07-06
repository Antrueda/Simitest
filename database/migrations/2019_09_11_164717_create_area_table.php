<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {

    Schema::create('areas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nombre',120)->unique();
      $table->string('contexto',2)->nullable();
      $table->text('descripcion',4000)->nullable();
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->bigInteger('user_crea_id')->unsigned(); 
      $table->bigInteger('user_edita_id')->unsigned();
      $table->timestamps();
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
    Schema::dropIfExists('areas');
  }
}