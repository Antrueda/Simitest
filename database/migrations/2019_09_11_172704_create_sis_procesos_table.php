<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisProcesosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('sis_procesos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_proceso_id')->unsigned()->nullable();
            $table->bigInteger('sis_mapa_proc_id')->unsigned();
            $table->bigInteger('prm_proceso_id')->unsigned();
            $table->string('nombre');
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('sis_proceso_id')->references('id')->on('sis_procesos');
            $table->foreign('sis_mapa_proc_id')->references('id')->on('sis_mapa_procs');
            $table->foreign('prm_proceso_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('sis_procesos');
    }
}