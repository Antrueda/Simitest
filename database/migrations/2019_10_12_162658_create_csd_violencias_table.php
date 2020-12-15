<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCsdViolenciasTable extends Migration
{
    private $tablaxxx = 'csd_violencias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->bigInteger('prm_condicion_id')->unsigned()->comment('CAMPO ID SI PRESENTA CONDICION DE VIOLENCIA');
            $table->bigInteger('departamento_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->bigInteger('municipio_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE MUNICIPIO');
            $table->bigInteger('prm_certificado_id')->unsigned()->nullable()->comment('CAMPO ID SI TIENE CERTIFICADO');
            $table->bigInteger('departamento_cert_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO DE CERTIFICADO');
            $table->bigInteger('municipio_cert_id')->unsigned()->nullable()->comment('CAMPO ID DE DE MUNICIPIO DE CERTIFICADO');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_condicion_id')->references('id')->on('parametros');
            $table->foreign('departamento_cond_id')->references('id')->on('sis_departamentos');
            $table->foreign('municipio_cond_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_certificado_id')->references('id')->on('parametros');
            $table->foreign('departamento_cert_id')->references('id')->on('sis_departamentos');
            $table->foreign('municipio_cert_id')->references('id')->on('sis_municipios');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA CONDICION ESPECIAL DE UNA PERSONA ENTREVISTADA, SECCION 2 VIOLENCIAS Y CONDICION ESPECIAL DE CONSULTA SOCIAL EN DOMICILIO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
