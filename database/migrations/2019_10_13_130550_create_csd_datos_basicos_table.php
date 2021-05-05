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
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->string('s_primer_nombre')->comment('CAMPO PRIMER NOMBRE');
            $table->string('s_segundo_nombre')->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->string('s_primer_apellido')->comment('CAMPO PRIMER APELLIDO');
            $table->string('s_segundo_apellido')->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('s_nombre_identitario')->nullable()->comment('CAMPO NOMBRE IDENTITARIO');
            $table->string('s_apodo')->nullable()->comment('CAMPO APODO');
            $table->integer('prm_sexo_id')->unsigned()->comment('CAMPO PARAMETRO SEXO');
            $table->integer('prm_identidad_genero_id')->unsigned()->comment('CAMPO PARAMETRO IDENTIDAD DE GENERO');
            $table->integer('prm_orientacion_sexual_id')->unsigned()->comment('CAMPO PARAMETRO ORIENTACION SEXUAL');
            $table->date('d_nacimiento')->comment('CAMPO PARAMETRO FECHA DE NACIMIENTO');
            $table->integer('sis_pai_id')->unsigned()->comment('CAMPO PAIS DE NACIMIENTO');
            $table->integer('sis_departam_id')->unsigned()->comment('CAMPO DEPARTAMENTO DE NACIMIENTO');
            $table->integer('sis_municipio_id')->unsigned()->comment('CAMPO MUNICIPIO DE NACIMIENTO');
            $table->integer('prm_tipodocu_id')->unsigned()->comment('PARAMETRO TIPO DE DOCUMENTO');
            $table->integer('prm_doc_fisico_id')->unsigned()->comment('PARAMETRO TIENE DOCUMENTO FISICO');
            $table->integer('prm_ayuda_id')->unsigned()->nullable()->comment('PARAMETRO MOTIVO POR EL QUE NO TIENE DOCUMENTO FISICO');
            $table->string('s_documento')->comment('NUMERO DE DOCUMENTO');
            $table->integer('sis_paiexp_id')->unsigned()->comment('CAMPO PAIS DE EXPEDICION DE DOCUMENTO');
            $table->integer('sis_departamexp_id')->unsigned()->comment('CAMPO DEPARTAMENTO EXPEDICION DE DOCUMENTO');
            $table->integer('sis_municipioexp_id')->unsigned()->nullable()->comment('CAMPO MUNICIPIO DE EXPEDICION DE DOCUMENTO');
            $table->integer('prm_gsanguino_id')->unsigned()->comment('CAMPO GRUPO SANGUINEO');
            $table->integer('prm_factor_rh_id')->unsigned()->comment('CAMPO TIPO RH');
            $table->integer('prm_situacion_militar_id')->unsigned()->nullable()->comment('CAMPO SITUACION MILITAR DEFINIDA');
            $table->integer('prm_clase_libreta_id')->unsigned()->nullable()->comment('CAMPO QUE TIPO DE LIBRETA');
            $table->integer('prm_estado_civil_id')->unsigned()->comment('CAMPO ESTADO CIVIL');
            $table->integer('prm_etnia_id')->unsigned()->comment('CAMPO ETNIA');
            $table->integer('prm_poblacion_etnia_id')->unsigned()->nullable()->comment('CAMPO TIPO DE ETNIA');
            $table->integer('prm_tipoblaci_id')->unsigned()->nullable()->comment('CAMPO TIPO DE POBLACION');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_sexo_id')->references('id')->on('parametros');
            $table->foreign('prm_identidad_genero_id')->references('id')->on('parametros');
            $table->foreign('prm_orientacion_sexual_id')->references('id')->on('parametros');
            $table->foreign('sis_pai_id')->references('id')->on('sis_pais');
            $table->foreign('sis_departam_id')->references('id')->on('sis_departams');
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_tipodocu_id')->references('id')->on('parametros');
            $table->foreign('prm_doc_fisico_id')->references('id')->on('parametros');
            $table->foreign('prm_ayuda_id')->references('id')->on('parametros');
            $table->foreign('sis_paiexp_id')->references('id')->on('sis_pais');
            $table->foreign('sis_departamexp_id')->references('id')->on('sis_departams');
            $table->foreign('sis_municipioexp_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_gsanguino_id')->references('id')->on('parametros');
            $table->foreign('prm_factor_rh_id')->references('id')->on('parametros');
            $table->foreign('prm_situacion_militar_id')->references('id')->on('parametros');
            $table->foreign('prm_clase_libreta_id')->references('id')->on('parametros');
            $table->foreign('prm_estado_civil_id')->references('id')->on('parametros');
            $table->foreign('prm_etnia_id')->references('id')->on('parametros');
            $table->foreign('prm_poblacion_etnia_id')->references('id')->on('parametros');
            $table->foreign('prm_tipoblaci_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BÁSICOS DE UNA PERSONA ENTREVISTADA, SECCION 1 DATOS BASICOS DE CONSULTA SOCIAL EN DOMICILIO'");
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
