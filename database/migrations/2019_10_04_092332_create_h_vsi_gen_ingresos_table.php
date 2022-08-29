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
            $table->string('expectativa',4000)->nullable()->comment('CAMPO ABIERTO EXPECTATIVA ');
            $table->string('descripcion',4000)->nullable()->comment('CAMPO ABIERTO DESCRIPCION ');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DIAS QUE REALIZA ACTIVIDAD');
            $table->integer('vsi_geningreso_id')->unsigned()->comment('CAMPO ID GENERACION DE INGRESO');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO DE QUIEN GENERA APORTES');
            $table->integer('vsi_geningreso_id')->unsigned()->comment('CAMPO ID GENERACION DE INGRESO');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO LABOR QUE DESEMPEÑA');
            $table->integer('vsi_geningreso_id')->unsigned()->comment('CAMPO ID GENERACION DE INGRESO');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
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
