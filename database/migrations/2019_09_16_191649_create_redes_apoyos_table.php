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
      $table->bigIncrements('id');

      $table->bigInteger('entidadAtiende_id')->unsigned();
      $table->bigInteger('ServPrestados_id')->unsigned();
      $table->integer('tiempoBeneficio');
      $table->bigInteger('duracion_id')->unsigned();
      $table->bigInteger('tiempoPrestacion_id')->unsigned();
      $table->bigInteger('tipoRed_id')->unsigned();
      $table->bigInteger('tipoRedPersona_id')->unsigned();
      $table->string('nombrePersona');
      $table->bigInteger('servBenePersona_id')->unsigned();
      $table->bigInteger('entidadAtiendeActual_id')->unsigned();
      $table->bigInteger('durTiempoBen_id')->unsigned();
      $table->bigInteger('anioPrestServicio_id')->unsigned();
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

      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->bigInteger('sis_esta_id')->unsigned();
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