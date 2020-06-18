<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDependenSisServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_dependen_sis_servicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_dependen_id')->unsigned();
            $table->bigInteger('sis_servicio_id')->unsigned();
            
            $table->foreign('sis_dependen_id')->references('id')->on('sis_dependens');
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
        Schema::dropIfExists('sis_dependen_sis_servicio');
    }
}
