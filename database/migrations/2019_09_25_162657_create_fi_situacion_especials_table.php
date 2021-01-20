<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiSituacionEspecialsTable extends Migration
{
    private $tablaxxx = 'fi_situacion_especials';
    private $tablaxxx2 = 'fi_riesgo_escnnas';
    private $tablaxxx3 = 'fi_situacion_vulneracions';
    private $tablaxxx4 = 'fi_victima_escnnas';
    private $tablaxxx5 = 'fi_razon_iniciados';
    private $tablaxxx6 = 'fi_razon_continuas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID NNAJ');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('i_prm_tipo_id')->nullable()->unsigned()->comment('CAMPO DE TIPO DE SITUACION');
            $table->bigInteger('prm_presconf_id')->nullable()->unsigned()->comment('13.4 ES USTED JOVEN EN PRESUNTO CONFLICTO CON LA LEY?');
            $table->bigInteger('i_tiempo')->nullable()->comment('CAMPO DE TIEMPO');
            $table->bigInteger('i_prm_ttiempo_id')->nullable()->unsigned()->comment('CAMPO DE TIPO DE TIEMPO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_tipo_id')->references('id')->on('parametros');
            $table->foreign('prm_presconf_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ttiempo_id')->references('id')->on('parametros');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE LOS DETALLES DE LA SITUACION ESPECIAL DE LA PERSONA ENTREVISTADA, FICHA DE INGRESO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->bigInteger('i_prm_situacion_vulnera_id')->unsigned()->comment('CAMPO PARAMETRO SITUACION VULNERABLE');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_situacion_vulnera_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE CONTIENE EL LISTADO DE SITUACIONES QUE VULNERAN A LA PERSONA ENTREVISTADA, FICHA DE INGRESO'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->bigInteger('i_prm_victima_escnna_id')->unsigned()->comment('CAMPO PARAMETRO VICTIMA ESCNNA');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_victima_escnna_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE CONTIENE EL LISTADO DE SITUACIONES QUE HACEN VICTIMIZAN A LA PERSONA ENTREVISTADA COMO ESCNNAS, FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->bigInteger('i_prm_riesgo_escnna_id')->unsigned()->comment('CAMPO PARAMETRO RIESGO DE ESCNNA');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_riesgo_escnna_id')->references('id')->on('parametros');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE CONTIENE EL LISTADO DE SITUACIONES QUE PONEN EN RIESGO A LA PERSONA ENTREVISTADA DE ESCNNAS, FICHA DE INGRESO'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->bigInteger('i_prm_iniciado_id')->unsigned()->comment('CAMPO PARAMETRO RAZONES ESTA INICIADO EN ALGUNA SITUACION ESPECIAL');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_iniciado_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE CONTIENE LAS RAZONES EN QUE ESTA INICIADO EN ALGUNA SITUACION EN ESPECIAL, FICHA DE INGRESO'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->bigInteger('i_prm_continua_id')->unsigned()->comment('CAMPO PARAMETRO RAZONES EN QUE LE DA CONTINUIDAD EN ALGUNA SITUACION ESPECIAL ');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_continua_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE CONTIENE LAS RAZONES EN QUE LE DAN CONTINUIDAD EN ALGUNA SITUACION EN ESPECIAL, FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}