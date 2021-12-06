<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadUpiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_upi', function (Blueprint $table) {
            $table->id();
            $table->integer('actividade_id')->unsigned()->comment('ACTIVIDAD');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('actividade_id')->references('id')->on('ae_asistencias');
            $table->foreign('sis_depen_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_ae_encuentro_ag_recurso', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_encuentro_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('ag_recurso_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ae_encuentro_id')->references('id')->on('ae_encuentros');
            $table->foreign('ag_recurso_id')->references('id')->on('ag_recursos');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ae_encuentro_ag_recurso');
        Schema::dropIfExists('h_ae_encuentro_ag_recurso');
    }
}
