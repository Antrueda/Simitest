<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiConsumosTable extends Migration
{
    private $tablaxxx = 'h_vsi_consumos';
    private $tablaxxx2 = 'h_vsi_consumo_quien';
    private $tablaxxx3 = 'h_vsi_consumo_expectativa';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->integer('prm_consumo_id')->unsigned()->comment('CAMPO PARAMETRO CONSUMO');
            $table->Integer('cantidad')->unsigned()->nullable()->comment('CAMPO CUANTAS SUSTANCIAS');
            $table->Integer('inicio')->unsigned()->nullable()->comment('CAMPO EDAD QUE INICIO EL CONSUME');
            $table->integer('prm_contexto_ini_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO QUE CONTEXTO INICIO EL CONSUMO');
            $table->integer('prm_consume_id')->unsigned()->nullable()->comment('CAMPO ACTUALMENTE CONSUME SPA');
            $table->integer('prm_contexto_man_id')->unsigned()->nullable()->comment('CAMPO CONTEXTO MANTIENE EL CONSUMO DE SPA');
            $table->integer('prm_problema_id')->unsigned()->nullable()->comment('CAMPO CONSIDERA UN PROBLEMA EL CONSUMO DE SPA');
            $table->string('porque')->nullable()->comment('CAMPO POR QUE CONSIDERA PROBLEMA EL CONSUMO DE SPA');
            $table->integer('prm_motivo_id')->unsigned()->nullable()->comment('CAMPO MOTIVO PARA EL CONSUMO DE SPA');
            $table->integer('prm_expectativa_id')->unsigned()->nullable()->comment('CAMPO MOTIVO PARA EL CONSUMO DE SPA');
            $table->integer('prm_familia_id')->unsigned()->comment('CAMPO ALGUN MIEMBRO DE LA FAMILIAR CONSUME SPA');
            $table->longText('descripcion')->nullable()->comment('CAMPO DESCRIPCION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE FAMILIARES QUE CONSUMEN SPA');
            $table->integer('vsi_consumo_id')->unsigned()->comment('CAMPO ID CONSUMO');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO EXPECTATIVAS DE L CONSUMO DE SUSTANCIAS PSICOACTIVAS');
            $table->integer('vsi_consumo_id')->unsigned()->comment('CAMPO ID CONSUMO');
            $table = CamposMagicos::h_magicos($table);
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
