<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiSaludsTable extends Migration
{
    private $tablaxxx = 'vsi_saluds';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('vsi_id')->unsigned()->comment('CAMPO DE ID VALORACION');
            $table->bigInteger('prm_atencion_id')->unsigned()->comment('CAMPO DE TIPO DE ATENCION');
            $table->bigInteger('prm_condicion_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO CONDICION');
            $table->bigInteger('prm_medicamento_id')->unsigned()->comment('CAMPO DE PARAMETRO MEDICAMENTO');
            $table->bigInteger('prm_prescripcion_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO PRESCRIPCION');
            $table->bigInteger('prm_sexual_id')->unsigned()->comment('CAMPO HA INICIADO VIDA SEXUAL');
            $table->bigInteger('prm_activa_id')->unsigned()->nullable()->comment('CAMPO VIDA SEXUAL ACTIVA');
            $table->bigInteger('prm_embarazo_id')->unsigned()->nullable()->comment('CAMPO HA TENIDO EMBARAZOS');
            $table->bigInteger('prm_hijo_id')->unsigned()->nullable()->comment('CAMPO DE SI TIENE HIJOS');
            $table->bigInteger('prm_interrupcion_id')->unsigned()->nullable()->comment('CAMPO PRESENTADO INTERRUPCION EN EMBARAZO');
            $table->string('medicamento')->nullable()->comment('CAMPO ABIERTO MEDICAMENTO');
            $table->longText('descripcion')->nullable()->comment('CAMPO ABIERTO DESCRIPCION');
            $table->integer('edad')->unsigned()->nullable()->comment('CAMPO EDAD QUE INICIO SU VIDA SEXUAL');
            $table->integer('embarazo')->unsigned()->nullable()->comment('CAMPO SEMANAS DE EMBARAZO');
            $table->integer('hijo')->unsigned()->nullable()->comment('CAMPO NUMERICO HIJOS');
            $table->integer('interrupcion')->unsigned()->nullable()->comment('CAMPO CUANTAS INTERRUPCIONES');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_atencion_id')->references('id')->on('parametros');
            $table->foreign('prm_condicion_id')->references('id')->on('parametros');
            $table->foreign('prm_medicamento_id')->references('id')->on('parametros');
            $table->foreign('prm_prescripcion_id')->references('id')->on('parametros');
            $table->foreign('prm_sexual_id')->references('id')->on('parametros');
            $table->foreign('prm_activa_id')->references('id')->on('parametros');
            $table->foreign('prm_embarazo_id')->references('id')->on('parametros');
            $table->foreign('prm_hijo_id')->references('id')->on('parametros');
            $table->foreign('prm_interrupcion_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA SALUD DEL NNAJ.'");
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
