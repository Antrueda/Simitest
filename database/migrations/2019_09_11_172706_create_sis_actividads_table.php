<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisActividadsTable extends Migration
{
  private $tablaxxx = 'sis_actividads';
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create($this->tablaxxx, function (Blueprint $table) {
      $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->string('nombre')->comment('CAMPO DE NOMBRE');
      $table->integer('sis_docfuen_id')->unsigned()->comment('CAMPO DE ID DOCUMENTO FUENTE');
      $table->integer('user_crea_id')->unsigned();
      $table->integer('user_edita_id')->unsigned();
      $table->integer('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();

      $table->foreign('user_crea_id')->references('id')->on('users');
      $table->foreign('user_edita_id')->references('id')->on('users');
      $table->foreign('sis_docfuen_id')->references('id')->on('sis_docfuens');
      $table->unique(['nombre', 'sis_docfuen_id'],'sisact_un1');
    });
   //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS ACTIVIDADES DEL SISTEMA.'");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists($this->tablaxxx);
  }
}
