<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcvRedesActualesTable extends Migration
{
    private $tablaxxx = 'fcv_redes_actuales';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            //$table->integer('fi_csd_vsi_reda_id')->unsigned();
            $table->integer('prm_tipo_id')->unsigned()->comment('CAMPO TIPO DE RED');
            $table->string('nombre')->comment('CAMPO DE TEXTO NOMBRE');
            $table->string('servicio')->comment('CAMPO DE TEXTO SERVICIO');
            $table->string('telefono')->nullable()->comment('CAMPO DE TEXTO TELEFONO');
            $table->string('direccion')->nullable()->comment('CAMPO DE TEXTO DIRECCION');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            //$table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
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
        Schema::dropIfExists($this->tablaxxx);
    }
}
