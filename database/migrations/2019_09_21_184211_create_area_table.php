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

    Schema::create('in_indicadors', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_indicador')->unique();

      $table->bigInteger('area_id')->unsigned();
      $table->bigInteger('user_crea_id')->unsigned(); 
      $table->bigInteger('user_edita_id')->unsigned();
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();
      $table->foreign('area_id')->references('id')->on('areas');
      $table->foreign('user_crea_id')->references('id')->on('users');
      $table->foreign('user_edita_id')->references('id')->on('users');
      
    });


    Schema::create('in_linea_bases', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_linea_base', 300)->unique();
      $table->bigInteger('user_crea_id')->unsigned(); 
      $table->bigInteger('user_edita_id')->unsigned();
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();
      
      $table->foreign('user_crea_id')->references('id')->on('users');
      $table->foreign('user_edita_id')->references('id')->on('users');
    });




    Schema::create('sis_tablas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_tabla')->nullable();
      $table->string('s_descripcion')->nullable();
      $table->timestamps();
      
      $table->bigInteger('sis_documento_fuente_id')->unsigned();
      $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');

    });
    Schema::create('sis_campo_tablas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_campo')->nullable();
      $table->string('s_descripcion')->nullable();
      $table->bigInteger('sis_tabla_id')->unsigned();
      $table->timestamps();
      
      $table->foreign('sis_tabla_id')->references('id')->on('sis_tablas');
    });


  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {


    Schema::dropIfExists('sis_campo_tablas');
    Schema::dropIfExists('sis_tablas');
    Schema::dropIfExists('in_linea_bases');
    Schema::dropIfExists('in_indicadors');
    Schema::dropIfExists('areas');
  }
}
