<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiDatosVinculasTable extends Migration
{
    private $tablaxxx = 'h_vsi_datos_vinculas';
    private $tablaxxx2 = 'h_vsi_situacion_vincula';
    private $tablaxxx3 = 'h_vsi_emocion_vincula';
    private $tablaxxx4 = 'h_vsi_personas';
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
        $table->Integer('dia')->unsigned()->nullable();
        $table->Integer('mes')->unsigned()->nullable();
        $table->Integer('ano')->unsigned()->nullable();
        $table = CamposMagicos::h_magicos($table);
      });
     //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

      Schema::create($this->tablaxxx2, function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('parametro_id')->unsigned();
        $table->bigInteger('vsi_datos_vincula_id')->unsigned();
        $table = CamposMagicos::h_magicos($table);
      });
     //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

      Schema::create($this->tablaxxx3, function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('parametro_id')->unsigned();
        $table->bigInteger('vsi_datos_vincula_id')->unsigned();
        $table = CamposMagicos::h_magicos($table);
      });
     //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");
      
      Schema::create($this->tablaxxx4, function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('parametro_id')->unsigned();
        $table->bigInteger('vsi_datos_vincula_id')->unsigned();
        $table = CamposMagicos::h_magicos($table);
      });
     //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");
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
