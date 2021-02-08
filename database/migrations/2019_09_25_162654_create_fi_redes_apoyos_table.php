<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiRedesApoyosTable extends Migration
{
    private $tablaxxx = 'fi_red_apoyo_antecedentes';
    private $tablaxxx2 = 'fi_red_apoyo_actuals';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_tiempo')->comment('CAMPO TIEMPO');
            $table->bigInteger('sis_entidad_id')->unsigned()->comment('CAMPO ID DE ENTIDAD');
            $table->string('s_servicio')->comment('CAMPO TEXTO DE SERVICIO');
            $table->bigInteger('i_prm_tiempo_id')->unsigned()->comment('CAMPO PARAMETRO TIEMPO');
            $table->bigInteger('i_prm_anio_prestacion_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas')->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('i_prm_tiempo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_anio_prestacion_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE EL LISTADO DE LOS ANTECEDENTES INSTITUCIONALES DE LOS SERVICIOS RECIBIDOS POR LA PERSONA ENTREVISTADA, SECCION 9 REDES DE APOYO DE FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas')->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->bigInteger('i_prm_tipo_red_id')->unsigned();
            $table->string('s_nombre_persona');
            $table->string('s_servicio');
            $table->string('s_telefono')->nullable();
            $table->string('s_direccion')->nullable();
            $table->foreign('i_prm_tipo_red_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE CONTIENE EL LISTADO DE LAS REDES DE APOYO ACTUALES CON LOS SERVICIOS O BENEFICIOS QUE ACTUALMENTE RECIBE LA PERSONA ENTREVISTADA, SECCION 9 REDES DE APOYO DE FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}