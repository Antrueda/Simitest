<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiDatosVinculasTable extends Migration
{
    private $tablaxxx = 'h_vsi_datos_vinculas';
    private $tablaxxx2 = 'h_vsi_situacion_vincula';
    private $tablaxxx3 = 'h_vsi_emocion_vincula';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create($this->tablaxxx, function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('vsi_id')->unsigned();
        $table->bigInteger('prm_razon_id')->unsigned();
        $table->bigInteger('prm_persona_id')->unsigned();
        $table->Integer('dia')->unsigned();
        $table->Integer('mes')->unsigned();
        $table->Integer('ano')->unsigned();
        $table->bigInteger('user_crea_id')->unsigned();
        $table->bigInteger('user_edita_id')->unsigned();
        $table->bigInteger('sis_esta_id')->unsigned()->default(1);
        $table->timestamps();
      });
      DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
  
      Schema::create($this->tablaxxx2, function (Blueprint $table) {
        $table->bigInteger('parametro_id')->unsigned();
        $table->bigInteger('vsi_datos_vincula_id')->unsigned();
        $table->bigInteger('user_crea_id')->unsigned();
        $table->bigInteger('user_edita_id')->unsigned();
        $table->unique(['parametro_id', 'vsi_datos_vincula_id']);
      });
      DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
  
      Schema::create($this->tablaxxx3, function (Blueprint $table) {
        $table->bigInteger('parametro_id')->unsigned();
        $table->bigInteger('vsi_datos_vincula_id')->unsigned();
        $table->bigInteger('user_crea_id')->unsigned();
        $table->bigInteger('user_edita_id')->unsigned();
        $table->unique(['parametro_id', 'vsi_datos_vincula_id']);
      });
      DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists($this->tablaxxx3);
      Schema::dropIfExists($this->tablaxxx2);
      Schema::dropIfExists($this->tablaxxx);
    }
  }