<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiSituacionEspecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_situacion_especials', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('i_prm_tipo_id')->nullable()->unsigned();
            $table->bigInteger('i_tiempo')->nullable();
            $table->bigInteger('i_prm_ttiempo_id')->nullable()->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_tipo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ttiempo_id')->references('id')->on('parametros');
            
        });

        Schema::create('fi_situacion_vulneracions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_situacion_vulnera_id')->unsigned();

            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_situacion_vulnera_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
            
        });
        Schema::create('fi_victima_escnnas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_victima_escnna_id')->unsigned();

            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
             $table->foreign('i_prm_victima_escnna_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
            
        });

        Schema::create('fi_riesgo_escnnas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_riesgo_escnna_id')->unsigned();

            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_riesgo_escnna_id')->references('id')->on('parametros');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
            
        });


        Schema::create('fi_razon_iniciados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_iniciado_id')->unsigned();

            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_iniciado_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
            
        });

        Schema::create('fi_razon_continuas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_continua_id')->unsigned();

            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_continua_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
            
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_razon_continuas');
        Schema::dropIfExists('fi_razon_iniciados');
        Schema::dropIfExists('fi_victima_escnnas');
        Schema::dropIfExists('fi_situacion_vulneracions');
        Schema::dropIfExists('fi_riesgo_escnnas');
        Schema::dropIfExists('fi_situacion_especials');
    }
}
