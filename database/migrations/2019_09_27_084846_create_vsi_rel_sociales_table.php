<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVsiRelSocialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vsi_rel_sociales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->string('descripcion', 4000);
            $table->bigInteger('prm_dificultad_id')->nullable()->unsigned();
            $table->string('completa', 4000)->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('i_prm_linea_base_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('i_prm_linea_base_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_relsol_facilita', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relsocial_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
           
            $table->foreign('parametro_id')->references('id')->on('parametros');
            
            $table->foreign('vsi_relsocial_id')->references('id')->on('vsi_rel_sociales');
            $table->unique(['parametro_id', 'vsi_relsocial_id']);
            
        });
        Schema::create('vsi_relsol_dificulta', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relsocial_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();    
           
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relsocial_id')->references('id')->on('vsi_rel_sociales');
            $table->unique(['parametro_id', 'vsi_relsocial_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vsi_relsol_dificulta');
        Schema::dropIfExists('vsi_relsol_facilita');
        Schema::dropIfExists('vsi_rel_sociales');
    }
}
