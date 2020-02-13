<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiRelFamiliarsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_rel_familiars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_representativa_id')->unsigned();
            $table->string('representativa', 4000);
            $table->bigInteger('prm_mala_id')->unsigned();
            $table->bigInteger('prm_relacion_id')->unsigned();
            $table->bigInteger('prm_gusto_id')->unsigned();
            $table->string('porque', 4000)->nullable();
            $table->bigInteger('prm_familia_id')->unsigned();
            $table->bigInteger('prm_denuncia_id')->unsigned()->nullable();
            $table->string('descripcion', 4000)->nullable();
            $table->bigInteger('prm_pareja_id')->unsigned();
            $table->bigInteger('prm_dificultad_id')->unsigned()->nullable();
            $table->Integer('dia')->unsigned()->nullable();
            $table->Integer('mes')->unsigned()->nullable();
            $table->Integer('ano')->unsigned()->nullable();
            $table->bigInteger('prm_responde_id')->unsigned()->nullable();
            $table->string('descripcion1', 4000)->nullable();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_representativa_id')->references('id')->on('parametros');
            $table->foreign('prm_mala_id')->references('id')->on('parametros');
            $table->foreign('prm_relacion_id')->references('id')->on('parametros');
            $table->foreign('prm_gusto_id')->references('id')->on('parametros');
            $table->foreign('prm_familia_id')->references('id')->on('parametros');
            $table->foreign('prm_denuncia_id')->references('id')->on('parametros');
            $table->foreign('prm_pareja_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('prm_responde_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_relfam_motivo', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relfamiliar_id')->references('id')->on('vsi_rel_familiars');
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            
        });
        Schema::create('vsi_relfam_dificultad', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relfamiliar_id')->references('id')->on('vsi_rel_familiars');
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            
        });
        Schema::create('vsi_relfam_acciones', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relfamiliar_id')->references('id')->on('vsi_rel_familiars');
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_relfam_acciones');
        Schema::dropIfExists('vsi_relfam_dificultad');
        Schema::dropIfExists('vsi_relfam_motivo');
        Schema::dropIfExists('vsi_rel_familiars');
    }
}