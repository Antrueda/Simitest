<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateParametrosTable extends Migration
{
  private $tablaxxx = 'parametros';
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create($this->tablaxxx, function (Blueprint $table) {
      $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->string('nombre')->unique()->comment('CAMPO DE NOMBRE DEL PARAMETRO');
      $table->Integer('user_crea_id');
      $table->integer('user_edita_id');
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();
    });
    DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS PARAMETROS DEL SISTEMA'");
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