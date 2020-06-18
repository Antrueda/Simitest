<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateSisActividadSisDocufuenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_activida_sis_docufuen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_actividad_id')->unsigned();
            $table->bigInteger('sis_docufuen_id')->unsigned();
            // $table->unique(['sis_actividad_id','sis_docufuen_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_activida_sis_docufuen');
    }
}
