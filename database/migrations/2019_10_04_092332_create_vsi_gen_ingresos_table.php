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
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->integer('prm_actividad_id')->unsigned()->comment('CAMPO TIPO DE ACTIVIDAD GENERADORA DE INGRESOS');
            $table->string('trabaja')->nullable()->comment('CAMPO TRABAJO FORMAL');
            $table->integer('prm_informal_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TRABAJO INFORMAL');
            $table->integer('prm_otra_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO OTRAS ACTIVIDADES');
            $table->integer('prm_no_id')->unsigned()->nullable()->comment('CAMPO POR QUE NO GENERA INGRESOS');
            $table->Integer('cuanto')->unsigned()->nullable()->comment('CAMPO HACE CUANTO NO GENERA INGRESOS ');
            $table->integer('prm_periodo_id')->unsigned()->nullable()->comment('CAMPO PERIODO QUE GENERA INGRESOS ');
            $table->integer('prm_jornada_id')->unsigned()->nullable()->comment('CAMPO JORNADA QUE GENERA INGRESOS ');
            $table->Integer('jornada_entre')->unsigned()->nullable()->comment('CAMPO NUMERO JORNADA ENTRE ');
            $table->integer('prm_jor_entre_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO JORNADA ENTRE ');
            $table->Integer('jornada_a')->unsigned()->nullable()->comment('CAMPO NUMERO JORNADA HASTA ');
            $table->integer('prm_jor_a_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO JORNADA A ');
            $table->integer('prm_frecuencia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE INGRESO ');
            $table->Integer('aporte')->unsigned()->nullable()->comment('CAMPO APORTE ');
            $table->integer('prm_laboral_id')->unsigned()->nullable()->comment('CAMPO RELACION LABORAL ');
            $table->integer('prm_aporta_id')->unsigned()->nullable()->comment('CAMPO SI REALIZA UN APORTE ');
            $table->string('porque')->nullable()->comment('CAMPO POR QUE REALIZA UN APORTE ');
            $table->Integer('cuanto_aporta')->unsigned()->nullable()->comment('CAMPO CUANTO APORTA ');
            $table->longText('expectativa')->nullable()->comment('CAMPO ABIERTO EXPECTATIVA ');
            $table->longText('descripcion')->nullable()->comment('CAMPO ABIERTO DESCRIPCION ');

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('prm_informal_id')->references('id')->on('parametros');
            $table->foreign('prm_otra_id')->references('id')->on('parametros');
            $table->foreign('prm_no_id')->references('id')->on('parametros');
            $table->foreign('prm_periodo_id')->references('id')->on('parametros');
            $table->foreign('prm_jornada_id')->references('id')->on('parametros');
            $table->foreign('prm_jor_entre_id')->references('id')->on('parametros');
            $table->foreign('prm_jor_a_id')->references('id')->on('parametros');
            $table->foreign('prm_frecuencia_id')->references('id')->on('parametros');
            $table->foreign('prm_laboral_id')->references('id')->on('parametros');
            $table->foreign('prm_aporta_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA GENERACION DE LOS INGRESOS DE LA PERSONA ENTREVISTADA, SECCION 9 GENERACION DE INGRESOS DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DIAS QUE REALIZA ACTIVIDAD');
            $table->integer('vsi_geningreso_id')->unsigned()->comment('CAMPO ID GENERACION DE INGRESO');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS DIAS EN QUE SON GENERADOS LOS INGRESOS DE LA PERSONA ENTREVISTADA, PREGUNTA 9.7 SECCION 9 GENERACION DE INGRESOS DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO DE QUIEN GENERA APORTES');
            $table->integer('vsi_geningreso_id')->unsigned()->comment('CAMPO ID GENERACION DE INGRESO');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA QUIEN GENERA LOS INGRESOS DE LA PERSONA ENTREVISTADA, PREGUNTA 9.13 SECCION 9 GENERACION DE INGRESOS DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO LABOR QUE DESEMPEÑA');
            $table->integer('vsi_geningreso_id')->unsigned()->comment('CAMPO ID GENERACION DE INGRESO');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LA LABOR DESEMPEÑADA EN LA GENERACION DE LOS INGRESOS DE LA PERSONA ENTREVISTADA, PREGUNTA 9.14 SECCION 9 GENERACION DE INGRESOS DE LA FICHA SICOSOCIAL'");
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
