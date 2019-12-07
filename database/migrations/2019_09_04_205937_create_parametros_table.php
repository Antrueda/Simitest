<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('parametros', function (Blueprint $table){
      $table->bigIncrements('id');
      $table->string('nombre')->unique();
      $table->integer('user_crea_id');
      $table->integer('user_edita_id');
      $table->boolean('activo')->default(1);
      $table->timestamps();
      $table->engine = 'InnoDB';
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('parametros');
  }
}