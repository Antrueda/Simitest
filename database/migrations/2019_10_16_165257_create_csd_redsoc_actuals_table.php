<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsdRedsocActualsTable extends Migration{

    public function up(){
        Schema::create('csd_redsoc_actuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_tipo_id')->unsigned();
            $table->string('nombre');
            $table->string('servicios',120);
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
            
        });
    }

    public function down(){
        Schema::dropIfExists('csd_redsoc_actuals');
    }
}
