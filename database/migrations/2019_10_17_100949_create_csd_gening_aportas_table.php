<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsdGeningAportasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('csd_gening_aportas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_aporta_id')->unsigned();
            $table->integer('mensual');
            $table->integer('aporte');
            $table->Integer('jornada_entre')->unsigned();
            $table->bigInteger('prm_entre_id')->unsigned();
            $table->Integer('jornada_a')->unsigned();
            $table->bigInteger('prm_a_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_aporta_id')->references('id')->on('parametros');
            $table->foreign('prm_entre_id')->references('id')->on('parametros');
            $table->foreign('prm_a_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('csd_gening_dias', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_geningreso_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_geningreso_id')->references('id')->on('csd_gening_aportas');
            $table->unique(['parametro_id', 'csd_geningreso_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('csd_gening_dias');
        Schema::dropIfExists('csd_gening_aportas');
    }
}