<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiDatosVinculasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_datos_vinculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_razon_id')->unsigned();
            $table->bigInteger('prm_persona_id')->unsigned();
            $table->Integer('dia')->unsigned();
            $table->Integer('mes')->unsigned();
            $table->Integer('ano')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_razon_id')->references('id')->on('parametros');
            $table->foreign('prm_persona_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_situacion_vincula', function (Blueprint $table) {
          $table->bigInteger('parametro_id')->unsigned();
          $table->bigInteger('vsi_datos_vincula_id')->unsigned();
          $table->bigInteger('user_crea_id')->unsigned(); 
          $table->bigInteger('user_edita_id')->unsigned();
          $table->foreign('parametro_id')->references('id')->on('parametros');
          $table->foreign('vsi_datos_vincula_id')->references('id')->on('vsi_datos_vinculas');
          $table->unique(['parametro_id', 'vsi_datos_vincula_id']);
          
        });
        Schema::create('vsi_emocion_vincula', function (Blueprint $table) {
          $table->bigInteger('parametro_id')->unsigned();
          $table->bigInteger('vsi_datos_vincula_id')->unsigned();
          $table->bigInteger('user_crea_id')->unsigned(); 
          $table->bigInteger('user_edita_id')->unsigned();
          $table->foreign('parametro_id')->references('id')->on('parametros');
          $table->foreign('vsi_datos_vincula_id')->references('id')->on('vsi_datos_vinculas');
          $table->unique(['parametro_id', 'vsi_datos_vincula_id']);
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_emocion_vincula');
        Schema::dropIfExists('vsi_situacion_vincula');
        Schema::dropIfExists('vsi_datos_vinculas');
    }
}