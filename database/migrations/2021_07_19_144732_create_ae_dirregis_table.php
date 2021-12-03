<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeDirregisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ae_dirregis', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_asistencia_id')->unsigned();
            $table->integer('i_prm_tipo_via_id')->unsigned();
            $table->string('s_complemento')->nullable();
            $table->integer('s_nombre_via');
            $table->integer('i_prm_alfabeto_via_id')->unsigned()->nullable();
            $table->integer('i_prm_tiene_bis_id')->unsigned()->nullable();
            $table->integer('i_prm_bis_alfabeto_id')->unsigned()->nullable();
            $table->integer('i_prm_cuadrante_vp_id')->unsigned()->nullable();
            $table->integer('i_via_generadora');
            $table->integer('i_prm_alfabetico_vg_id')->unsigned()->nullable();
            $table->integer('i_placa_vg');
            $table->integer('i_prm_cuadrante_vg_id')->unsigned()->nullable();
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ae_asistencia_id')->references('id')->on('ae_asistencias');
            $table->foreign('i_prm_tipo_via_id')->references('id')->on('parametros');
            $table->foreign('i_prm_alfabeto_via_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tiene_bis_id')->references('id')->on('parametros');
            $table->foreign('i_prm_bis_alfabeto_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cuadrante_vp_id')->references('id')->on('parametros');
            $table->foreign('i_prm_alfabetico_vg_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cuadrante_vg_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_ae_dirregis', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_asistencia_id')->unsigned();
            $table->integer('i_prm_tipo_via_id')->unsigned();
            $table->string('s_complemento')->nullable();
            $table->integer('s_nombre_via');
            $table->integer('i_prm_alfabeto_via_id')->unsigned()->nullable();
            $table->integer('i_prm_tiene_bis_id')->unsigned()->nullable();
            $table->integer('i_prm_bis_alfabeto_id')->unsigned()->nullable();
            $table->integer('i_prm_cuadrante_vp_id')->unsigned()->nullable();
            $table->integer('i_via_generadora');
            $table->integer('i_prm_alfabetico_vg_id')->unsigned()->nullable();
            $table->integer('i_placa_vg');
            $table->integer('i_prm_cuadrante_vg_id')->unsigned()->nullable();
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ae_asistencia_id')->references('id')->on('ae_asistencias');
            $table->foreign('i_prm_tipo_via_id')->references('id')->on('parametros');
            $table->foreign('i_prm_alfabeto_via_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tiene_bis_id')->references('id')->on('parametros');
            $table->foreign('i_prm_bis_alfabeto_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cuadrante_vp_id')->references('id')->on('parametros');
            $table->foreign('i_prm_alfabetico_vg_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cuadrante_vg_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('h_ae_dirregis');
        Schema::dropIfExists('ae_dirregis');
    }
}
