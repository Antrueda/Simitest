<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisActividadProcesosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('sis_actividad_procesos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_actividad_id')->unsigned();
            $table->bigInteger('sis_proceso_id')->unsigned();
            $table->integer('tiempo'); //Tiempo actualiza
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('sis_actividad_id')->references('id')->on('sis_actividads');    
            $table->foreign('sis_proceso_id')->references('id')->on('sis_procesos');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('sis_actividad_procesos');
    }
}