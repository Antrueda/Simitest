<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdRedsocPasadosTable extends Migration
{
    private $tablaxxx = 'csd_redsoc_pasados';
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
            $table->string('nombre')->comment('CAMPO DE TEXTO NOMBRE ENTIDAD');
            $table->string('servicios', 120)->comment('CAMPO DE TEXTO SERVICIO');
            $table->integer('cantidad')->nullable()->comment('CAMPO DE NUMERICO DE CANTIDAD');
            $table->integer('prm_unidad_id')->unsigned()->comment('CAMPO PARAMETRO UNIDAD');
            $table->integer('ano')->comment('CAMPO DE AÑO');
            $table->longText('retiro')->nullable()->comment('CAMPO DE TEXTO DE RETIRO');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_unidad_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS ANTECEDENTES INSTITUCIONALES DE LAS REDES DE APOYO QUE TUVO LA PERSONA ENTREVISTADA, PREGUNTA 11.1 REDES DE APOYO ACTUALES SECCION 11 REDES SOCIALES DE APOYO DE LA CONSULTA SOCIAL EN DOMICILIO'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
