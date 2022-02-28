<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsdDiariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asd_diarias', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('consecut')->comment('CONSECUTIVO');
            $table->date('fechdili')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            // $table->integer('sis_servicio_id')->unsigned()->comment('SERVICIO');
            $table->integer('prm_luga_acti_id')->unsigned()->comment('LUGAR DE LA ACTIVIDAD');
            $table->integer('sis_localidad_id')->unsigned()->nullable()->comment('LOCALIDAD');
            $table->integer('sis_upz_id')->unsigned()->nullable()->comment('UPZ');
            $table->integer('sis_barrio_id')->unsigned()->nullable()->comment('BARRIO');
            $table->integer('sis_departam_id')->unsigned()->nullable()->comment('DEPARTAMENTO');
            $table->integer('sis_municipio_id')->unsigned()->nullable()->comment('MUNICIPIO');
            $table->integer('prm_actividad_id')->unsigned()->comment('ACTIVIDAD/PROGRAMA');
            $table->integer('prm_grupo_id')->unsigned()->comment('GRUPO');
            $table->integer('num_pag')->unsigned()->comment('NUMERO DE PAGINAS');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            // $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            $table->foreign('prm_luga_acti_id')->references('id')->on('parametros');
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('sis_departam_id')->references('id')->on('sis_departams');
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('prm_grupo_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_asd_diarias', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('consecut')->comment('CONSECUTIVO');
            $table->date('fechdili')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            // $table->integer('sis_servicio_id')->unsigned()->comment('SERVICIO');
            $table->integer('prm_luga_acti_id')->unsigned()->comment('LUGAR DE LA ACTIVIDAD');
            $table->integer('sis_localidad_id')->unsigned()->nullable()->comment('LOCALIDAD');
            $table->integer('sis_upz_id')->unsigned()->nullable()->comment('UPZ');
            $table->integer('sis_barrio_id')->unsigned()->nullable()->comment('BARRIO');
            $table->integer('sis_departam_id')->unsigned()->nullable()->comment('DEPARTAMENTO');
            $table->integer('sis_municipio_id')->unsigned()->nullable()->comment('MUNICIPIO');
            $table->integer('prm_actividad_id')->unsigned()->comment('ACTIVIDAD/PROGRAMA');
            $table->integer('prm_grupo_id')->unsigned()->comment('GRUPO');
            $table->integer('num_pag')->unsigned()->comment('NUMERO DE PAGINAS');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            // $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            $table->foreign('prm_luga_acti_id')->references('id')->on('parametros');
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('sis_departam_id')->references('id')->on('sis_departams');
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('prm_grupo_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('asd_diarias');
        Schema::dropIfExists('h_asd_diarias');
    }
}
