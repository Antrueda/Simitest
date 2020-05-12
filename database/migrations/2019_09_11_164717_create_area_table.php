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
      $table->foreign('user_crea_id')->references('id')->on('users');
      $table->foreign('user_edita_id')->references('id')->on('users');
      $table->timestamps();
    });




    Schema::create('sis_tablas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_tabla')->nullable();
      $table->string('s_descripcion')->nullable();
      $table->timestamps();
      
      $table->bigInteger('sis_documento_fuente_id')->unsigned();
      $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');

    });
    /**
     * TABLA QUE ALMACENA LOS NOBRES DE LOS CAMPOS QUE TIENEN LAS TABLAS DEL SISTEMA
     */
    Schema::create('sis_tcampos', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('s_campo')->comment('NOMOBRE DEL CAMPO');
      $table->string('s_numero')->comment('NUMERO DE LA PREGUNTA');
      $table->bigInteger('sis_tabla_id')->unsigned()->comment('TABLA EN QUE ES ENCUENTRA EL CAMPO');
      $table->bigInteger('in_pregunta_id')->unsigned()->comment('PREGUNTA CON LA QUE SE ENCUENTRA ASOCIADO EL CAMPO');
      
      $table->bigInteger('prm_trespu_id')->unsigned()->comment('TIPO DE RESPUESTA');      
      $table->foreign('sis_tabla_id')->references('id')->on('sis_tablas');
      $table->foreign('in_pregunta_id')->references('id')->on('in_pseguntas');
      $table->foreign('prm_trespu_id')->references('id')->on('parametros');

      $table->bigInteger('user_crea_id')->unsigned(); 
      $table->bigInteger('user_edita_id')->unsigned();
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->foreign('user_crea_id')->references('id')->on('users');
      $table->foreign('user_edita_id')->references('id')->on('users');
      $table->timestamps();
    });


  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {


    Schema::dropIfExists('sis_tcampos');
    Schema::dropIfExists('sis_tablas');
    Schema::dropIfExists('in_linea_bases');
    Schema::dropIfExists('in_indicadors');
    Schema::dropIfExists('areas');
  }
}
