<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateRedesApoyosTable extends Migration
{
  private $tablaxxx = 'redes_apoyos';
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create($this->tablaxxx, function (Blueprint $table) {
      $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->integer('entidadAtiende_id')->unsigned()->comment('CAMPO ID DE LA ENTIDAD QUE ATIENDE');
      $table->integer('ServPrestados_id')->unsigned()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->integer('tiempoBeneficio')->comment('CAMPO DE TIEMPO');
      $table->integer('duracion_id')->unsigned()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->integer('tiempoPrestacion_id')->unsigned()->comment('CAMPO DE PARAMETRO DE TIEMPO');
      $table->integer('tipoRed_id')->unsigned()->comment('CAMPO DE PARAMETRO DE TIPO DE RED');
      $table->integer('tipoRedPersona_id')->unsigned()->comment('CAMPO DE PARAMETRO TIPO DE PERSONA');
      $table->string('nombrePersona')->comment('CAMPO NOMBRE DE LA PERSONA');
      $table->integer('servBenePersona_id')->unsigned();
      $table->integer('entidadAtiendeActual_id')->unsigned();
      $table->integer('durTiempoBen_id')->unsigned();
      $table->integer('anioPrestServicio_id')->unsigned();
      $table->string('telApoyo');
      $table->string('dirApoyo');

      $table->foreign('entidadAtiende_id')->references('id')->on('parametros');
      $table->foreign('ServPrestados_id')->references('id')->on('parametros');
      $table->foreign('duracion_id')->references('id')->on('parametros');
      $table->foreign('tiempoPrestacion_id')->references('id')->on('parametros');
      $table->foreign('tipoRed_id')->references('id')->on('parametros');
      $table->foreign('tipoRedPersona_id')->references('id')->on('parametros');
      $table->foreign('entidadAtiendeActual_id')->references('id')->on('parametros');
      $table->foreign('durTiempoBen_id')->references('id')->on('parametros');
      $table->foreign('anioPrestServicio_id')->references('id')->on('parametros');
      $table->foreign('servBenePersona_id')->references('id')->on('parametros');

      $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
      $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
      $table->integer('sis_esta_id')->unsigned();
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();
    });
   //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DE LOS SERVICIOS BRINDADOS A LOS BENEFICIARIOS POR PARTE DE ENTIDADES DISTINTAS A IDIPRON.'");
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
