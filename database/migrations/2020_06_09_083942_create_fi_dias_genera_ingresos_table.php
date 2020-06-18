<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiDiasGeneraIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }
}
