<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiActividadestlsTable extends Migration
{
    private $tablaxxx = 'fi_actividadestls';
    private $tablaxxx2 = 'fi_actividad_tiempo_libres';
    private $tablaxxx3 = 'fi_sacramentos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_horas_permanencia_calle')->unsigned()->nullable()->comment('CAMPO HORA DE PERMANECIA EN CALLE');
            $table->integer('i_dias_permanencia_calle')->unsigned()->nullable()->comment('CAMPO DIAS DE PERMANENCIA EN CALLE');
            $table->integer('i_prm_pertenece_parche_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO PERTENCE A PARCHE');
            $table->string('s_nombre_parche')->nullable()->comment('CAMPO NOMBRE DE PARCHE');
            $table->integer('i_prm_acceso_recreacion_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE RECREACCION');
            $table->integer('i_prm_practica_religiosa_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO PRACTICA RELIGIOSA');
            $table->integer('i_prm_religion_practica_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO RELIGION QUE PRACTICA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID NNAJ');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_pertenece_parche_id')->references('id')->on('parametros');
            $table->foreign('i_prm_acceso_recreacion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_practica_religiosa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_religion_practica_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE ALGUNOS DETALLES DE LAS ACTIVIDADES REALIZADAS POR LA PERSONA ENTREVISTADA EN SU TIEMPO LIBRE, SECCION 8 DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_actividadestl_id')->unsigned()->comment('REGISTRO ACTIVIDAD DE TIEMPO LIBRE AL QUE SE LE ASIGNA LA ACTIVIDAD');
            $table->integer('i_prm_actividad_tl_id')->unsigned()->comment('FI 8.3 ACTIVIDADES TIEMPO LIBRE');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_actividadestl_id')->references('id')->on('fi_actividadestls');
            $table->foreign('i_prm_actividad_tl_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE CONTIENE EL LISTADO DE LAS ACTIVIDADES REALIZADAS POR LA PERSONA ENTREVISTADA EN SU TIEMPO LIBRE, PREGUNTA 8.3 SECCION 8 DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_actividadestl_id')->unsigned()->comment('REGISTRO ACTIVIDAD DE TIEMPO LIBRE AL QUE SE LE ASIGNA EL SACRAMENTO');
            $table->integer('prm_sacrhec_id')->unsigned()->comment('FI 8.8 SACRAMENTOS HECHOS');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_actividadestl_id')->references('id')->on('fi_actividadestls');
            $table->foreign('prm_sacrhec_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE CONTIENE EL LISTADO DE LOS SACRAMENTOS REALIZADOS POR LA PERSONA ENTREVISTADA, PREGUNTA 8.8 SECCION 8 DE LA FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
