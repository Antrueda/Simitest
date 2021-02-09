<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHFcvRedesActualesTable extends Migration
{
    private $tablaxxx = 'h_fcv_redes_actuales';
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
            $table->integer('prm_tipo_id')->unsigned();
            $table->string('nombre');
            $table->longText('servicio');
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
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
