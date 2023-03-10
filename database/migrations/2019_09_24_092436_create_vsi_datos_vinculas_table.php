<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiDatosVinculasTable extends Migration
{
  private $tablaxxx = 'vsi_datos_vinculas';
  private $tablaxxx2 = 'vsi_situacion_vincula';
  private $tablaxxx3 = 'vsi_emocion_vincula';
  private $tablaxxx4 = 'vsi_personas';
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create($this->tablaxxx, function (Blueprint $table) {
      $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->integer('vsi_id')->unsigned()->comment('CAMPO DE ID DE VALORACION');
      $table->integer('prm_razon_id')->unsigned()->comment('CAMPO PARAMETRO RAZON');
      $table->Integer('dia')->unsigned()->nullable()->comment('CAMPO DIA');
      $table->Integer('mes')->unsigned()->nullable()->comment('CAMPO MES');
      $table->Integer('ano')->unsigned()->nullable()->comment('CAMPO ANO');
      $table->foreign('vsi_id')->references('id')->on('vsis');
      $table->foreign('prm_razon_id')->references('id')->on('parametros');

      $table = CamposMagicos::magicos($table);
    });
   //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS RAZONES DE VINCULACIÓN AL IDIPRON DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, PREGUNTA 1.11 A 1.13'");

    Schema::create($this->tablaxxx2, function (Blueprint $table) {
      $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->integer('parametro_id')->unsigned()->comment('CAMPO DE SITUACIONES');
      $table->integer('vsi_datos_vincula_id')->unsigned()->comment('CAMPO ID DE DATOS VINCULA');
      $table->foreign('parametro_id')->references('id')->on('parametros');
      $table->foreign('vsi_datos_vincula_id')->references('id')->on('vsi_datos_vinculas');
      $table->unique(['parametro_id', 'vsi_datos_vincula_id'],'sitvin_pk1');
      $table = CamposMagicos::magicos($table);
    });
   //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LAS SITUACIONES, CONDICIONES O ACTIVIDADES QUE PARACEN PRODUCIR O EMPEORAR LAS DIFICULTADES DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, PREGUNTA 1.14'");

    Schema::create($this->tablaxxx3, function (Blueprint $table) {
      $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO EMOCIONES');
      $table->integer('vsi_datos_vincula_id')->unsigned()->comment('CAMPO ID DE DATOS VINCULA');
      $table->foreign('parametro_id')->references('id')->on('parametros');
      $table->foreign('vsi_datos_vincula_id')->references('id')->on('vsi_datos_vinculas');
      $table->unique(['parametro_id', 'vsi_datos_vincula_id'],'emovin_pk1');
      $table = CamposMagicos::magicos($table);
    });
   //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LAS EMOCIONES QUE LE GENERAN ESTAS DIFICULTADES DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, PREGUNTA 1.15'");


    Schema::create($this->tablaxxx4, function (Blueprint $table) {
      $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DIFICULTADES');
      $table->integer('vsi_datos_vincula_id')->unsigned()->comment('CAMPO ID DE DATOS VINCULA');
      $table->foreign('parametro_id')->references('id')->on('parametros');
      $table->foreign('vsi_datos_vincula_id')->references('id')->on('vsi_datos_vinculas');
      $table->unique(['parametro_id', 'vsi_datos_vincula_id'],'person_pk1');
      $table = CamposMagicos::magicos($table);
    });
   //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LAS PERSONAS QUE LE GENERAN ESTAS DIFICULTADES DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, PREGUNTA 1.15'");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists($this->tablaxxx4);
    Schema::dropIfExists($this->tablaxxx3);
    Schema::dropIfExists($this->tablaxxx2);
    Schema::dropIfExists($this->tablaxxx);
  }
}
