<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisEntidadSisServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_entidad_sis_servicio', function (Blueprint $table) {
            $table->bigInteger('sis_entidad_id')->unsigned();
            $table->bigInteger('sis_servicio_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            //$table->unique(['sis_entidad_id', 'sis_servicio_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_entidad_sis_servicio');
    }
}
