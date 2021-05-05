<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdRedsocActualsTable extends Migration
{
    private $tablaxxx = 'csd_redsoc_actuals';
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
            $table->integer('prm_tipo_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE ENTIDAD');
            $table->string('nombre')->comment('CAMPO DE TEXTO NOMBRE');
            $table->string('servicios', 120)->comment('CAMPO DE TEXTO SERVICIOS');
            $table->string('telefono')->nullable()->comment('CAMPO DE TELEFONO');
            $table->string('direccion')->nullable()->comment('CAMPO DE DIRECCION');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS REDES SOCIALES QUE ACTUALMENTE TIENE LA PERSONA ENTREVISTADA, PREGUNTA 11.2 REDES DE APOYO ACTUALES SECCION 11 REDES SOCIALES DE APOYO DE LA CONSULTA SOCIAL EN DOMICILIO'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}