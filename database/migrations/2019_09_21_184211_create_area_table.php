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
      $table->string('nombre')->unique();
      $table->integer('user_crea_id');
      $table->integer('user_edita_id');
      $table->boolean('activo')->default(1);
      $table->timestamps();
      $table->engine = 'InnoDB';
    });

    Schema::create('in_indicadors', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_indicador')->unique();

      $table->bigInteger('area_id')->unsigned();
      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->boolean('activo')->default(1);
      $table->timestamps();
      $table->foreign('area_id')->references('id')->on('areas');
      $table->foreign('user_crea_id')->references('id')->on('users');
      $table->foreign('user_edita_id')->references('id')->on('users');
      $table->engine = 'InnoDB';
    });


    Schema::create('in_linea_bases', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('i_prm_categoria_id')->unsigned();
      $table->string('s_linea_base', 300)->unique();
      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->boolean('activo')->default(1);
      $table->timestamps();
      $table->engine = 'InnoDB';
      $table->foreign('user_crea_id')->references('id')->on('users');
      $table->foreign('user_edita_id')->references('id')->on('users');
    });




    Schema::create('sis_tablas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_tabla')->nullable();
      $table->string('s_descripcion')->nullable();
      $table->timestamps();
      $table->engine = 'InnoDB';
      $table->bigInteger('sis_documento_fuente_id')->unsigned();
      $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');

    });
    Schema::create('sis_campo_tablas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_campo')->nullable();
      $table->string('s_descripcion')->nullable();
      $table->bigInteger('sis_tabla_id')->unsigned();
      $table->timestamps();
      $table->engine = 'InnoDB';
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
