<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisInstitucionEdusTable extends Migration
{
    private $tablaxxx = 'sis_institucion_edus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_nombre');
            $table->string('s_telefono');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->string('s_email');
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('i_prm_sector_id')->unsigned();
            $table->bigInteger('i_usr_rector_id')->unsigned();
            $table->bigInteger('i_usr_secretario_id')->unsigned();
            $table->bigInteger('i_usr_coord_academico_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');

            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('i_prm_sector_id')->references('id')->on('parametros');
            $table->foreign('i_usr_rector_id')->references('id')->on('users');
            $table->foreign('i_usr_secretario_id')->references('id')->on('users');
            $table->foreign('i_usr_coord_academico_id')->references('id')->on('users');
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DE IDENTIFICACIÓN, UBICACIÓN Y DE CONTACTO DE CENTROS EDUCATIVOS'");
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
