<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdDatosBasicosTable extends Migration
{
    private $tablaxxx = 'csd_datos_basicos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('identitario')->nullable();
            $table->string('apodo')->nullable();
            $table->bigInteger('prm_sexo_id')->unsigned();
            $table->bigInteger('prm_genero_id')->unsigned();
            $table->bigInteger('prm_sexual_id')->unsigned();
            $table->date('nacimiento');
            $table->bigInteger('pais_id')->unsigned();
            $table->bigInteger('departamento_id')->unsigned();
            $table->bigInteger('municipio_id')->unsigned();
            $table->bigInteger('prm_documento_id')->unsigned();
            $table->bigInteger('prm_doc_fisico_id')->unsigned();
            $table->bigInteger('prm_sin_fisico_id')->unsigned()->nullable();
            $table->string('documento');
            $table->bigInteger('pais_docum_id')->unsigned();
            $table->bigInteger('departamento_docum_id')->unsigned();
            $table->bigInteger('municipio_docum_id')->unsigned()->nullable();
            $table->bigInteger('prm_gruposang_id')->unsigned();
            $table->bigInteger('prm_factorsang_id')->unsigned();
            $table->bigInteger('prm_militar_id')->unsigned()->nullable();
            $table->bigInteger('prm_libreta_id')->unsigned()->nullable();
            $table->bigInteger('prm_civil_id')->unsigned();
            $table->bigInteger('prm_etnia_id')->unsigned();
            $table->bigInteger('prm_cual_id')->unsigned()->nullable();
            $table->bigInteger('prm_poblacion_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_sexo_id')->references('id')->on('parametros');
            $table->foreign('prm_genero_id')->references('id')->on('parametros');
            $table->foreign('prm_sexual_id')->references('id')->on('parametros');
            $table->foreign('pais_id')->references('id')->on('sis_pais');
            $table->foreign('departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_documento_id')->references('id')->on('parametros');
            $table->foreign('prm_doc_fisico_id')->references('id')->on('parametros');
            $table->foreign('prm_sin_fisico_id')->references('id')->on('parametros');
            $table->foreign('pais_docum_id')->references('id')->on('sis_pais');
            $table->foreign('departamento_docum_id')->references('id')->on('sis_departamentos');
            $table->foreign('municipio_docum_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_gruposang_id')->references('id')->on('parametros');
            $table->foreign('prm_factorsang_id')->references('id')->on('parametros');
            $table->foreign('prm_militar_id')->references('id')->on('parametros');
            $table->foreign('prm_libreta_id')->references('id')->on('parametros');
            $table->foreign('prm_civil_id')->references('id')->on('parametros');
            $table->foreign('prm_etnia_id')->references('id')->on('parametros');
            $table->foreign('prm_cual_id')->references('id')->on('parametros');
            $table->foreign('prm_poblacion_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE LOS DATOS BASICOS DE UNA PERSONA REGISTRADA EN EL SISTEMA'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}