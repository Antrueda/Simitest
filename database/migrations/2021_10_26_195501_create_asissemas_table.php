<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsissemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asissemas', function (Blueprint $table) {
            $table->id();
            $table->integer('consecut')->comment('CONSECUTIVO');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->integer('sis_servicio_id')->unsigned()->comment('SERVICIO');
            $table->integer('prm_actividad_id')->unsigned()->comment('ACTIVIDAD/PROGRAMA');
            $table->integer('prm_programa_id')->unsigned()->nullable()->comment('PROGRAMA/ACTIVIDAD');
            $table->integer('prm_convenio_id')->unsigned()->nullable()->comment('CONVENIO');
            $table->integer('tipoacti_id')->unsigned()->nullable()->comment('TIPO DE ACTIVIDAD');
            $table->integer('actividade_id')->unsigned()->nullable()->comment('ACTIVIDAD');
            $table->integer('eda_grados_id')->unsigned()->nullable()->comment('GRADO');
            $table->integer('prm_grupo_id')->unsigned()->comment('GRUPO');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table->integer('user_res_id')->unsigned()->comment('RESPONSABLE');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            // $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            // $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            // $table->foreign('prm_programa_id')->references('id')->on('parametros');
            // $table->foreign('prm_convenio_id')->references('id')->on('parametros');
            // $table->foreign('tipoacti_id')->references('id')->on('tipoactis');
            // $table->foreign('actividade_id')->references('id')->on('actividades');
            // $table->foreign('eda_grados_id')->references('id')->on('eda_gradoss');
            // $table->foreign('prm_grupo_id')->references('id')->on('parametros');
            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('user_res_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_asissemas', function (Blueprint $table) {
            $table->id();
            $table->integer('consecut')->comment('CONSECUTIVO');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->integer('sis_servicio_id')->unsigned()->comment('SERVICIO');
            $table->integer('prm_actividad_id')->unsigned()->comment('ACTIVIDAD/PROGRAMA');
            $table->integer('prm_programa_id')->unsigned()->nullable()->comment('PROGRAMA/ACTIVIDAD');
            $table->integer('prm_convenio_id')->unsigned()->nullable()->comment('CONVENIO');
            $table->integer('tipoacti_id')->unsigned()->nullable()->comment('TIPO DE ACTIVIDAD');
            $table->integer('actividade_id')->unsigned()->nullable()->comment('ACTIVIDAD');
            $table->integer('eda_grados_id')->unsigned()->nullable()->comment('GRADO');
            $table->integer('prm_grupo_id')->unsigned()->comment('GRUPO');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table->integer('user_res_id')->unsigned()->comment('RESPONSABLE');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            // $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            // $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            // $table->foreign('prm_programa_id')->references('id')->on('parametros');
            // $table->foreign('prm_convenio_id')->references('id')->on('parametros');
            // $table->foreign('tipoacti_id')->references('id')->on('tipoactis');
            // $table->foreign('actividade_id')->references('id')->on('actividades');
            // $table->foreign('eda_grados_id')->references('id')->on('eda_gradoss');
            // $table->foreign('prm_grupo_id')->references('id')->on('parametros');
            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('user_res_id')->references('id')->on('users');
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
        Schema::dropIfExists('asissemas');
        Schema::dropIfExists('h_asissemas');
    }
}
