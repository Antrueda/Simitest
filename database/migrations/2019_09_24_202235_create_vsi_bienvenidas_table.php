<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiBienvenidasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_bienvenidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->string('descripcion', 4000);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_bienvenida_motivo', function (Blueprint $table) {
          $table->bigInteger('parametro_id')->unsigned();
          $table->bigInteger('vsi_bienvenida_id')->unsigned();
          $table->bigInteger('user_crea_id')->unsigned();
          $table->bigInteger('user_edita_id')->unsigned();
          $table->foreign('parametro_id')->references('id')->on('parametros');
          $table->foreign('vsi_bienvenida_id')->references('id')->on('vsi_bienvenidas');
          $table->unique(['parametro_id', 'vsi_bienvenida_id']);
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_bienvenida_motivo');
        Schema::dropIfExists('vsi_bienvenidas');
    }
}