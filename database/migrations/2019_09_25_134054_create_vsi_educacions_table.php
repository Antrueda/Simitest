2<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiEducacionsTable extends Migration
{
    private $tablaxxx = 'vsi_educacions';
    private $tablaxxx2 = 'vsi_edu_causa';
    private $tablaxxx3 = 'vsi_edu_fortaleza';
    private $tablaxxx4 = 'vsi_edu_dificultad';
    private $tablaxxx5 = 'vsi_edu_diftipo_a';
    private $tablaxxx6 = 'vsi_edu_diftipo_b';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_estudia_id')->unsigned();
            $table->Integer('dia')->unsigned()->nullable();
            $table->Integer('mes')->unsigned()->nullable();
            $table->Integer('ano')->unsigned()->nullable();
            $table->bigInteger('prm_motivo_id')->unsigned()->nullable();
            $table->bigInteger('prm_rendimiento_id')->unsigned()->nullable();
            $table->bigInteger('prm_dificultad_id')->unsigned()->nullable();
            $table->bigInteger('prm_leer_id')->unsigned()->nullable();
            $table->bigInteger('prm_escribir_id')->unsigned()->nullable();
            $table->string('descripcion', 4000)->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

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
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA EDUCACIÓN DE LA PERSONA ENTREVISTADA, SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE CAUSAS DE LA DESERCION DE LA PERSONA ENTREVISTADA, PREGUNTA 10.4 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE FORTALEZAS DE LA PERSONA ENTREVISTADA, PREGUNTA 10.6 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE DIFICULTADES DE LA PERSONA ENTREVISTADA, PREGUNTA 10.7 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA EL LISTADO DE DIFICULTADES EXPERIMENTADAS DE LA PERSONA ENTREVISTADA, PREGUNTA 10.9 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_educacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA EL LISTADO DE TIPOS DE DIFICULTADES DE LA PERSONA ENTREVISTADA, PREGUNTA 10.10 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx);
    }
}
