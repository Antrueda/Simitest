<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDependenciaSisServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_dependencia_sis_servicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_dependencia_id')->unsigned();
            $table->bigInteger('sis_servicio_id')->unsigned();
            
            $table->foreign('sis_dependencia_id')->references('id')->on('sis_dependencias');
            $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_dependencia_sis_servicio');
    }
}
