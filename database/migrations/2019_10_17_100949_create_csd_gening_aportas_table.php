<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdGeningAportasTable extends Migration
{
    private $tablaxxx = 'csd_gening_aportas';
    private $tablaxxx2 = 'csd_gening_dias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->integer('prm_aporta_id')->unsigned()->comment('CAMPO PARAMETRO APORTA');
            $table->integer('mensual')->comment('CAMPO INGRESO MENSUAL');
            $table->integer('aporte')->comment('CAMPO APORTE');
            $table->Integer('jornada_entre')->unsigned()->comment('CAMPO JORNADA ENTRE');
            $table->integer('prm_entre_id')->unsigned()->comment('CAMPO PARAMETRO JORNADA');
            $table->Integer('jornada_a')->unsigned()->comment('CAMPO JORNADA HASTA');
            $table->integer('prm_a_id')->unsigned()->comment('CAMPO PARAMETRO JORNADA');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_aporta_id')->references('id')->on('parametros');
            $table->foreign('prm_entre_id')->references('id')->on('parametros');
            $table->foreign('prm_a_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DE LOS FAMILIARES QUE APORTAN INGRESOS AL INTERIOR DEL NUCLEO FAMILIAR DE LA PERSONA PERSONA ENTREVISTADA, PREGUNTA 10.1 SECCION 10 GENERACION DE INGRESOS DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO DIAS');
            $table->integer('csd_geningreso_id')->unsigned()->comment('CAMPO GENERACION DE INGRESO');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_geningreso_id')->references('id')->on('csd_gening_aportas');
            $table->unique(['parametro_id', 'csd_geningreso_id']);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE LOS DIAS DE LA SEMANA EN LOS QUE SE GENERAN INGRESOS AL INTERIOR DEL NUCLEO FAMILIAR DE LA PERSONA PERSONA ENTREVISTADA, PREGUNTA 10.5 SECCION 10 GENERACION DE INGRESOS DE CONSULTA SOCIAL EN DOMICILIO'");
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
