<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiGenIngresosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_gen_ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_actividad_id')->unsigned();
            $table->string('trabaja')->nullable();
            $table->bigInteger('prm_informal_id')->unsigned()->nullable();
            $table->bigInteger('prm_otra_id')->unsigned()->nullable();
            $table->bigInteger('prm_no_id')->unsigned()->nullable();
            $table->Integer('cuanto')->unsigned()->nullable();
            $table->bigInteger('prm_periodo_id')->unsigned()->nullable();
            $table->Integer('jornada_entre')->unsigned()->nullable();
            $table->bigInteger('prm_jor_entre_id')->unsigned()->nullable();
            $table->Integer('jornada_a')->unsigned()->nullable();
            $table->bigInteger('prm_jor_a_id')->unsigned()->nullable();
            $table->bigInteger('prm_frecuencia_id')->unsigned()->nullable();
            $table->Integer('aporte')->unsigned()->nullable();
            $table->bigInteger('prm_laboral_id')->unsigned()->nullable();
            $table->bigInteger('prm_aporta_id')->unsigned()->nullable();
            $table->string('porque')->nullable();
            $table->Integer('cuanto_aporta')->unsigned()->nullable();
            $table->string('expectativa', 4000)->nullable();
            $table->string('descripcion', 4000)->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('prm_informal_id')->references('id')->on('parametros');
            $table->foreign('prm_otra_id')->references('id')->on('parametros');
            $table->foreign('prm_no_id')->references('id')->on('parametros');
            $table->foreign('prm_periodo_id')->references('id')->on('parametros');
            $table->foreign('prm_jor_entre_id')->references('id')->on('parametros');
            $table->foreign('prm_jor_a_id')->references('id')->on('parametros');
            $table->foreign('prm_frecuencia_id')->references('id')->on('parametros');
            $table->foreign('prm_laboral_id')->references('id')->on('parametros');
            $table->foreign('prm_aporta_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_gening_dias', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            
        });
        Schema::create('vsi_gening_quien', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            
        });
        Schema::create('vsi_gening_labor', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_geningreso_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_geningreso_id')->references('id')->on('vsi_gen_ingresos');
            $table->unique(['parametro_id', 'vsi_geningreso_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_gening_labor');
        Schema::dropIfExists('vsi_gening_quien');
        Schema::dropIfExists('vsi_gening_dias');
        Schema::dropIfExists('vsi_gen_ingresos');
    }
}