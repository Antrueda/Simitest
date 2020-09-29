<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiGenIngresosTable extends Migration
{
    private $tablaxxx = 'h_vsi_gen_ingresos';
    private $tablaxxx2 = 'h_vsi_gening_dias';
    private $tablaxxx3 = 'h_vsi_gening_quien';
    private $tablaxxx4 = 'h_vsi_gening_labor';
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
            $table->bigInteger('prm_actividad_id')->unsigned();
            $table->string('trabaja')->nullable();
            $table->bigInteger('prm_informal_id')->unsigned()->nullable();
            $table->bigInteger('prm_otra_id')->unsigned()->nullable();
            $table->bigInteger('prm_no_id')->unsigned()->nullable();
            $table->Integer('cuanto')->unsigned()->nullable();
            $table->bigInteger('prm_periodo_id')->unsigned()->nullable();
            $table->bigInteger('prm_jornada_genera_ingreso_id')->unsigned()->nullable();
            $table->Integer('jornada_entre')->unsigned()->nullable();
            $table->bigInteger('prm_jor_entre_id')->unsigned()->nullable();
            $table->Integer('jornada_a')->unsigned()->nullable();
            $table->bigInteger('prm_jor_a_id')->unsigned()->nullable();
            $table->bigInteger('prm_frecuencia_id')->unsigned()->nullable();
            $table->Integer('aporte')->unsigned()->nullable();
            $table->bigInteger('prm_laboral_id')->unsigned()->nullable();
            $table->bigInteger('prm_aporta_id')->unsigned()->nullable();
            $table->string('porque')->nullable();
            $table->Integer('cuanto_aporta')->unsigned()->nullable();
            $table->string('expectativa', 4000)->nullable();
            $table->string('descripcion', 4000)->nullable();
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");
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
