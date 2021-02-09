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
            $table->integer('csd_id')->unsigned();
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->string('s_apodo')->nullable();
            $table->integer('prm_sexo_id')->unsigned();
            $table->integer('prm_identidad_genero_id')->unsigned();
            $table->integer('prm_orientacion_sexual_id')->unsigned();
            $table->date('d_nacimiento');
            $table->integer('sis_pai_id')->unsigned();
            $table->integer('sis_departam_id')->unsigned();
            $table->integer('sis_municipio_id')->unsigned();
            $table->integer('prm_tipodocu_id')->unsigned();
            $table->integer('prm_doc_fisico_id')->unsigned();
            $table->integer('prm_ayuda_id')->unsigned()->nullable();
            $table->string('s_documento');
            $table->integer('sis_paiexp_id')->unsigned();
            $table->integer('sis_departamexp_id')->unsigned();
            $table->integer('sis_municipioexp_id')->unsigned()->nullable();
            $table->integer('prm_gsanguino_id')->unsigned();
            $table->integer('prm_factor_rh_id')->unsigned();
            $table->integer('prm_situacion_militar_id')->unsigned()->nullable();
            $table->integer('prm_clase_libreta_id')->unsigned()->nullable();
            $table->integer('prm_estado_civil_id')->unsigned();
            $table->integer('prm_etnia_id')->unsigned();
            $table->integer('prm_poblacion_etnia_id')->unsigned()->nullable();
            $table->integer('prm_tipoblaci_id')->unsigned()->nullable();
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
            $table->integer('prm_tipofuen_id')->unsigned();
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
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BÁSICOS DE UNA PERSONA ENTREVISTADA, SECCION 1 DATOS BASICOS DE CONSULTA SOCIAL EN DOMICILIO'");
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
