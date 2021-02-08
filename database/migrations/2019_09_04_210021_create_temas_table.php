<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTemasTable extends Migration
{
  private $tablaxxx = 'temas';
  private $tablaxxx2 = 'parametro_tema';
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create($this->tablaxxx, function (Blueprint $table) {
      $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
      $table->string('nombre')->unique()->comment('CAMPO DE NOMBRE DEL TEMAS');
      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
      $table->timestamps();
    });
   //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS TEMAS REGISTRADOS EN EL SISTEMA'");

    Schema::create($this->tablaxxx2, function (Blueprint $table) {
      $table->bigInteger('parametro_id')->unsigned();
      $table->bigInteger('tema_id')->unsigned();
      $table->string('simianti_id')->nullable()->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
      $table->bigInteger('user_crea_id')->unsigned();
      $table->bigInteger('user_edita_id')->unsigned();
      $table->foreign('parametro_id')->references('id')->on('parametros');
      $table->foreign('tema_id')->references('id')->on('temas');
      $table->unique(['parametro_id', 'tema_id'],'partem_un1');
    });
   //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LOS TEMAS REGISTRADOS EN EL SISTEMA'");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists($this->tablaxxx2);
    Schema::dropIfExists($this->tablaxxx);
  }
}
