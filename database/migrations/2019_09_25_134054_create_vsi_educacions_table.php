2<?php

use App\CamposMagicos\CamposMagicos;
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

    private $pk1 = 'educau_pk1';
    private $pk2 = 'edufor_pk1';
    private $pk3 = 'edudif_pk1';
    private $pk4 = 'eddift_pk1';
    private $pk5 = 'edifti_pk1';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO DE ID DE VALORACION');
            $table->integer('prm_estudia_id')->unsigned()->comment('CAMPO PARAMETRO ESTUDIA ');
            $table->Integer('dia')->unsigned()->nullable()->comment('CAMPO DIA');
            $table->Integer('mes')->unsigned()->nullable()->comment('CAMPO MES');
            $table->Integer('ano')->unsigned()->nullable()->comment('CAMPO AÑO');
            $table->integer('prm_motivo_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO DEL MOTIVO QUE NO ESTUDIA');
            $table->integer('prm_rendimiento_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO DE RENDIMIENTO');
            $table->integer('prm_dificultad_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO DE DIFICULTAD');
            $table->integer('prm_leer_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SI SABE LEER');
            $table->integer('prm_escribir_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SI SABE ESCRIBIR');
            $table->string('descripcion',4000)->nullable()->comment('CAMPO DE DESCRIPCION');

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_estudia_id')->references('id')->on('parametros');
            $table->foreign('prm_motivo_id')->references('id')->on('parametros');
            $table->foreign('prm_rendimiento_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('prm_leer_id')->references('id')->on('parametros');
            $table->foreign('prm_escribir_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA EDUCACIÓN DE LA PERSONA ENTREVISTADA, SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE CAUSAS');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::magicos($table);
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id'],$this->pk1);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE CAUSAS DE LA DESERCION DE LA PERSONA ENTREVISTADA, PREGUNTA 10.4 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE FORTALEZAS');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::magicos($table);
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id'],$this->pk2);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE FORTALEZAS DE LA PERSONA ENTREVISTADA, PREGUNTA 10.6 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE DIFICULTADES');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::magicos($table);
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id'],$this->pk3);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE DIFICULTADES DE LA PERSONA ENTREVISTADA, PREGUNTA 10.7 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE DIFICULTADES EXPERIMENTADAS');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::magicos($table);
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id'],$this->pk4);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA EL LISTADO DE DIFICULTADES EXPERIMENTADAS DE LA PERSONA ENTREVISTADA, PREGUNTA 10.9 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO TIPO DE DIFICULTADES');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::magicos($table);
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_educacion_id')->references('id')->on('vsi_educacions');
            $table->unique(['parametro_id', 'vsi_educacion_id'],$this->pk5);

        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA EL LISTADO DE TIPOS DE DIFICULTADES DE LA PERSONA ENTREVISTADA, PREGUNTA 10.10 SECCIÓN 10 EDUCACION DE LA FICHA SICOSOCIAL'");
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
