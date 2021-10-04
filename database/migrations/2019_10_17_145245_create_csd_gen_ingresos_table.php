<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdGenIngresosTable extends Migration
{
    private $tablaxxx = 'csd_gen_ingresos';
    private $tablaxxx2 = 'csd_dias_gen_ingresos';
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
            $table->string('observacion',4000)->nullable()->comment('CAMPO DE TEXTO OBSERVACIONES');
            $table->integer('prm_actividad_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE ACTIVIDAD');
            $table->string('trabaja')->nullable()->comment('CAMPO TEXTO TRABAJO FORMAL');
            $table->integer('prm_informal_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE TRABAJO INFORMAL');
            $table->integer('prm_otra_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO ACTIVIDAD');
            $table->integer('prm_laboral_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE RELACION LABORAL');
            $table->integer('prm_frecuencia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE FRENCUENCIA');
            $table->integer('intensidad')->unsigned()->nullable()->comment('CAMPO INTENSIDAD');
            $table->integer('prm_dificultad_id')->unsigned()->comment('CAMPO PARAMETRO DIFICULTAD');
            $table->string('razon',4000)->nullable()->comment('CAMPO DE TEXTO RAZON');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('prm_informal_id')->references('id')->on('parametros');
            $table->foreign('prm_otra_id')->references('id')->on('parametros');
            $table->foreign('prm_laboral_id')->references('id')->on('parametros');
            $table->foreign('prm_frecuencia_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA GENERACION DE INGRESOS AL INTERIOR DEL NUCLEO FAMILIAR DE LA PERSONA PERSONA ENTREVISTADA, SECCION 10 GENERACION DE INGRESOS DE CONSULTA SOCIAL EN DOMICILIO'");
        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_gen_ingresos_id')->unsigned()->comment('REGISTRO GENINGRESO AL QUE SE LE ASIGNA EL DÍA');
            $table->integer('prm_dia_genera_id')->unsigned()->comment('FI 7.3 DIA GENERA INGRESO');
            $table->foreign('csd_gen_ingresos_id')->references('id')->on('csd_gen_ingresos');
            $table->foreign('prm_dia_genera_id')->references('id')->on('parametros');
            CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE CONTIENE EL LISTADO DE DIAS EN LOS QUE SE REALIZA LA GENERACION DE LOS INGRESOS POR PARTE LA PERSONA ENTREVISTADA, PREGUNTA 7.3 SECCION 7 GENERACION DE INGRESOS DE LA FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx2);
    }
}
