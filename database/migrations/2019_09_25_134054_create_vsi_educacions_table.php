<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiEducacionsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_educacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_estudia_id')->unsigned();
            $table->Integer('dia')->unsigned()->nullable();
            $table->Integer('mes')->unsigned()->nullable();
            $table->Integer('ano')->unsigned()->nullable();
            $table->bigInteger('prm_motivo_id')->unsigned()->nullable();
            $table->bigInteger('prm_rendimiento_id')->unsigned();
            $table->bigInteger('prm_dificultad_id')->unsigned();
            $table->bigInteger('prm_leer_id')->unsigned()->nullable();
            $table->bigInteger('prm_escribir_id')->unsigned()->nullable();
            $table->string('descripcion', 4000)->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_estudia_id')->references('id')->on('parametros');
            $table->foreign('prm_motivo_id')->references('id')->on('parametros');
            $table->foreign('prm_rendimiento_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('prm_leer_id')->references('id')->on('parametros');
            $table->foreign('prm_escribir_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_edu_causa', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
            $table->engine = 'InnoDB';
        });
        Schema::create('vsi_edu_fortaleza', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
            $table->engine = 'InnoDB';
        });
        Schema::create('vsi_edu_dificultad', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
            $table->engine = 'InnoDB';
        });
        Schema::create('vsi_edu_diftipo_a', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
            $table->engine = 'InnoDB';
        });
        Schema::create('vsi_edu_diftipo_b', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_edu_diftipo_b');
        Schema::dropIfExists('vsi_edu_diftipo_a');
        Schema::dropIfExists('vsi_edu_dificultad');
        Schema::dropIfExists('vsi_edu_fortaleza');
        Schema::dropIfExists('vsi_edu_causa');
        Schema::dropIfExists('vsi_educacions');
    }
}