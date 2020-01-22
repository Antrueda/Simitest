<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVsiDatosBasicosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('dependencia_id')->unsigned();
            $table->date('fecha');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('dependencia_id')->references('id')->on('sis_dependencias');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_nnaj_emocional', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
            
        });
        Schema::create('vsi_nnaj_sexual', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
            
        });
        Schema::create('vsi_nnaj_comportamental', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
            
        });
        Schema::create('vsi_nnaj_academica', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
            
        });
        Schema::create('vsi_nnaj_social', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
            
        });
        Schema::create('vsi_nnaj_familiar', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_nnaj_familiar');
        Schema::dropIfExists('vsi_nnaj_social');
        Schema::dropIfExists('vsi_nnaj_academica');
        Schema::dropIfExists('vsi_nnaj_comportamental');
        Schema::dropIfExists('vsi_nnaj_sexual');
        Schema::dropIfExists('vsi_nnaj_emocional');
        Schema::dropIfExists('vsis');
    }
}