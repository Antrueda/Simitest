<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiSitEspecialsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_sit_especials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_victima_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_victima_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_sitesp_victima', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_sitespecial_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_sitespecial_id')->references('id')->on('vsi_sit_especials');
            $table->unique(['parametro_id', 'vsi_sitespecial_id']);
            
        });
        Schema::create('vsi_sitesp_riesgo', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_sitespecial_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_sitespecial_id')->references('id')->on('vsi_sit_especials');
            $table->unique(['parametro_id', 'vsi_sitespecial_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_sitesp_riesgo');
        Schema::dropIfExists('vsi_sitesp_victima');
        Schema::dropIfExists('vsi_sit_especials');
    }
}