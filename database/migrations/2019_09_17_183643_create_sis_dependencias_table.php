<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_dependencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->bigInteger('i_prm_cvital_id')->unsigned();
            $table->bigInteger('i_prm_tdependen_id')->unsigned();
            $table->bigInteger('sis_dependencia_id')->unsigned()->nullable();
            $table->bigInteger('i_prm_sexo_id')->unsigned();
            $table->string('s_direccion');
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('sis_localidad_id')->unsigned();
            $table->bigInteger('sis_barrio_id')->unsigned();
            $table->string('s_telefono');
            $table->string('s_correo');
            $table->string('i_tiempo');
            $table->string('s_observacion',3000);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned();
            $table->timestamps();
            

            $table->foreign('i_prm_cvital_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tdependen_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('sis_dependencia_id')->references('id')->on('sis_dependencias');
            $table->foreign('i_prm_sexo_id')->references('id')->on('parametros');
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
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
        Schema::dropIfExists('sis_dependencias');
    }
}
