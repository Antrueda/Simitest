<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiGeneracionIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_generacion_ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('i_prm_actividad_genera_ingreso_id')->unsigned();//->comment('FI 7.1 ACTIVIDAD REALIZA GENERAR INGRESO');
            $table->string('s_trabajo_formal')->nullable();//->comment('FI A.1 MENCIONE TRABAJO FORMAL');
            $table->bigInteger('i_prm_trabajo_informal_id')->unsigned();//->comment('FI B.1SELECCIONE TRABAJO INFORMAL');
            $table->bigInteger('i_prm_otra_actividad_id')->unsigned();//->comment('FI C.1 SELECCIONE OTRA ACTIVIDAD');
            $table->bigInteger('i_prm_razon_no_genera_ingreso_id')->unsigned();//->comment('FI D.1 PORQUE NO GENERA INGRESOS');
            $table->bigInteger('i_dias_buscando_empleo')->nullable();//->comment('FI D.1.1 DIAS BUSCANDO EMPLEO');
            $table->bigInteger('i_meses_buscando_empleo')->nullable();//->comment('FI D.1.2 MESES BUSCANDO EMPLEO');
            $table->bigInteger('i_anos_buscando_empleo')->nullable();//->comment('FI D.1.3 AÑOS BUSCANDO EMPLEO');
            $table->bigInteger('i_prm_jornada_genera_ingreso_id')->unsigned();//->comment('FI 7.2 EN QUE JORNADA GENERA INGRESO');
            $table->string('s_hora_inicial')->nullable();//->comment('FI 7.2.1 HORA INICIAL');
            $table->string('s_hora_final')->nullable();//->comment('FI 7.2.3 HORA FINAL');
            $table->bigInteger('i_prm_frec_ingreso_id')->unsigned();//->comment('FI 7.4.1 FRECUENCIA RECIBE INGRESO');
            $table->bigInteger('i_total_ingreso_mensual');//->comment('FI 7.4.2 TOTAL INGRESO MENSUAL');
            $table->bigInteger('i_prm_tipo_relacion_laboral_id')->unsigned();//->comment('FI 7.5 TIPO RELACION LABORAL');

            $table->bigInteger('sis_nnaj_id')->unsigned();//->comment('NNAJ AL QUE SE LE ASIGNA LA GENERACIÓN DE INGRESO');
            $table->bigInteger('user_crea_id')->unsigned();//->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned();//->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');//->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_trabajo_informal_id')->references('id')->on('parametros');
            $table->foreign('i_prm_otra_actividad_id')->references('id')->on('parametros');
            $table->foreign('i_prm_razon_no_genera_ingreso_id')->references('id')->on('parametros');
            $table->foreign('i_prm_jornada_genera_ingreso_id')->references('id')->on('parametros');
            $table->foreign('i_prm_frec_ingreso_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_relacion_laboral_id')->references('id')->on('parametros');
            
        });

        Schema::create('fi_dias_genera_ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_generacion_ingreso_id')->unsigned()->comment('REGISTRO GENINGRESO AL QUE SE LE ASIGNA EL DÍA');
            $table->bigIntegeR('i_prm_dia_genera_id')->unsigned()->comment('FI 7.3 DIA GENERA INGRESO');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_generacion_ingreso_id')->references('id')->on('fi_generacion_ingresos');
            $table->foreign('i_prm_dia_genera_id')->references('id')->on('parametros');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_dias_genera_ingresos');
        Schema::dropIfExists('fi_generacion_ingresos');
    }
}