<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiEstEmocionalsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_est_emocionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_siente_id')->unsigned();
            $table->bigInteger('prm_contexto_id')->unsigned();
            $table->binary('descripcion_siente');
            $table->bigInteger('prm_reacciona_id')->unsigned()->nullable();
            $table->binary('descripcion_reacciona');
            $table->binary('descripcion_adecuado');
            $table->binary('descripcion_dificulta');
            $table->bigInteger('prm_estresante_id')->unsigned();
            $table->binary('descripcion_estresante')->nullable();
            $table->bigInteger('prm_morir_id')->unsigned();
            $table->integer('dia_morir')->unsigned()->nullable();
            $table->integer('mes_morir')->unsigned()->nullable();
            $table->integer('ano_morir')->unsigned()->nullable();
            $table->bigInteger('prm_pensamiento_id')->unsigned()->nullable();
            $table->bigInteger('prm_amenaza_id')->unsigned()->nullable();
            $table->bigInteger('prm_intento_id')->unsigned()->nullable();
            $table->integer('ideacion')->unsigned()->nullable();
            $table->integer('amenaza')->unsigned()->nullable();
            $table->integer('intento')->unsigned()->nullable();
            $table->bigInteger('prm_riesgo_id')->unsigned()->nullable();
            $table->integer('dia_ultimo')->unsigned()->nullable();
            $table->integer('mes_ultimo')->unsigned()->nullable();
            $table->integer('ano_ultimo')->unsigned()->nullable();
            $table->binary('descripcion_motivo')->nullable();
            $table->bigInteger('prm_lesiva_id')->unsigned()->nullable();
            $table->binary('descripcion_lesiva')->nullable();
            $table->bigInteger('prm_sueno_id')->unsigned();
            $table->integer('dia_sueno')->unsigned()->nullable();
            $table->integer('mes_sueno')->unsigned()->nullable();
            $table->integer('ano_sueno')->unsigned()->nullable();
            $table->binary('descripcion_sueno')->nullable();
            $table->bigInteger('prm_alimenticio_id')->unsigned();
            $table->integer('dia_alimenticio')->unsigned()->nullable();
            $table->integer('mes_alimenticio')->unsigned()->nullable();
            $table->integer('ano_alimenticio')->unsigned()->nullable();
            $table->binary('descripcion_alimenticio')->nullable();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_siente_id')->references('id')->on('parametros');
            $table->foreign('prm_contexto_id')->references('id')->on('parametros');
            $table->foreign('prm_reacciona_id')->references('id')->on('parametros');
            $table->foreign('prm_estresante_id')->references('id')->on('parametros');
            $table->foreign('prm_morir_id')->references('id')->on('parametros');
            $table->foreign('prm_pensamiento_id')->references('id')->on('parametros');
            $table->foreign('prm_amenaza_id')->references('id')->on('parametros');
            $table->foreign('prm_intento_id')->references('id')->on('parametros');
            $table->foreign('prm_riesgo_id')->references('id')->on('parametros');
            $table->foreign('prm_lesiva_id')->references('id')->on('parametros');
            $table->foreign('prm_sueno_id')->references('id')->on('parametros');
            $table->foreign('prm_alimenticio_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_estemo_adecuado', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            
        });
        Schema::create('vsi_estemo_dificulta', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            
        });
        Schema::create('vsi_estemo_estresante', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            
        });
        Schema::create('vsi_estemo_motivo', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            
        });
        Schema::create('vsi_estemo_lesiva', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_estemo_lesiva');
        Schema::dropIfExists('vsi_estemo_motivo');
        Schema::dropIfExists('vsi_estemo_estresante');
        Schema::dropIfExists('vsi_estemo_dificulta');
        Schema::dropIfExists('vsi_estemo_adecuado');
        Schema::dropIfExists('vsi_est_emocionals');
    }
}