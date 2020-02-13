<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsdGenIngresosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('csd_gen_ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->string('observacion', 4000);
            $table->bigInteger('prm_actividad_id')->unsigned();
            $table->string('trabaja')->nullable();
            $table->bigInteger('prm_informal_id')->unsigned()->nullable();
            $table->bigInteger('prm_otra_id')->unsigned()->nullable();
            $table->bigInteger('prm_laboral_id')->unsigned()->nullable();
            $table->bigInteger('prm_frecuencia_id')->unsigned()->nullable();
            $table->integer('intensidad')->unsigned()->nullable();
            $table->bigInteger('prm_dificultad_id')->unsigned();
            $table->string('razon', 4000);
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('prm_informal_id')->references('id')->on('parametros');
            $table->foreign('prm_otra_id')->references('id')->on('parametros');
            $table->foreign('prm_laboral_id')->references('id')->on('parametros');
            $table->foreign('prm_frecuencia_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('csd_gen_ingresos');
    }
}