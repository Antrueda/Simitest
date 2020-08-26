<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiGenIngresosTable extends Migration
{
    private $tablaxxx = 'vsi_gen_ingresos';
    private $tablaxxx2 = 'vsi_gening_dias';
    private $tablaxxx3 = 'vsi_gening_quien';
    private $tablaxxx4 = 'vsi_gening_labor';
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

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('prm_informal_id')->references('id')->on('parametros');
            $table->foreign('prm_otra_id')->references('id')->on('parametros');
            $table->foreign('prm_no_id')->references('id')->on('parametros');
            $table->foreign('prm_periodo_id')->references('id')->on('parametros');
            $table->foreign('prm_jor_entre_id')->references('id')->on('parametros');
            $table->foreign('prm_jor_a_id')->references('id')->on('parametros');
            $table->foreign('prm_frecuencia_id')->references('id')->on('parametros');
            $table->foreign('prm_laboral_id')->references('id')->on('parametros');
            $table->foreign('prm_aporta_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA GENERACION DE LOS INGRESOS DE LA PERSONA ENTREVISTADA, SECCION 9 GENERACION DE INGRESOS DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS DIAS EN QUE SON GENERADOS LOS INGRESOS DE LA PERSONA ENTREVISTADA, PREGUNTA 9.7 SECCION 9 GENERACION DE INGRESOS DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA QUIEN GENERA LOS INGRESOS DE LA PERSONA ENTREVISTADA, PREGUNTA 9.13 SECCION 9 GENERACION DE INGRESOS DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LA LABOR DESEMPEÑADA EN LA GENERACION DE LOS INGRESOS DE LA PERSONA ENTREVISTADA, PREGUNTA 9.14 SECCION 9 GENERACION DE INGRESOS DE LA FICHA SICOSOCIAL'");
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
