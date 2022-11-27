<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdComFamiliarsTable extends Migration
{
    private $tablaxxx = 'csd_com_familiars';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned()->comment('CONSULTA SOCIAL EN DOMICILIO A LA QUE PERTENECE LA COMPOSICION FAMILIAR');
            $table->string('s_primer_apellido')->comment('CAMPO PRIMER APELLIDO');
            $table->string('s_segundo_apellido')->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('s_primer_nombre')->comment('CAMPO PRIMER NOMBRE');
            $table->string('s_segundo_nombre')->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->string('s_nombre_identitario')->nullable()->comment('CAMPO NOMBRE IDENTITARIO');
            $table->integer('prm_tipodocu_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE DOCUMENTO');
            $table->string('s_documento')->unique('csd_doc_un1')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table->date('d_nacimiento')->comment('CAMPO FECHA DE NACIMIENTO');
            $table->integer('prm_sexo_id')->unsigned()->comment('CAMPO PARAMETRO SEXO');
            $table->integer('prm_estado_civil_id')->unsigned()->comment('CAMPO PARAMETRO ESTADO CIVIL');
            $table->integer('prm_identidad_genero_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IDENTIDAD DE GENERO');
            $table->integer('prm_orientacion_sexual_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ORIENTACION SEXUAL');
            $table->integer('prm_etnia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ETNIA');
            $table->integer('prm_poblacion_etnia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO POBLACION ETNIA');
            $table->integer('prm_ocupacion_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO OCUPACION');
            $table->integer('prm_parentezco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO PARENTESCO');
            $table->integer('prm_convive_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONVIVE CON NNAJ');
            $table->integer('prm_visitado_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ES EL VISITADO');
            $table->integer('prm_vin_actual_id')->unsigned()->nullable()->comment('CAMPO VINCULADO AL IDIPRON');
            $table->integer('prm_vin_pasado_id')->unsigned()->nullable()->comment('CAMPO ESTUVO VINCULADO AL IDIPRON');
            $table->integer('prm_regimen_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO REGIMEN');
            $table->integer('prm_cualeps_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO EPS');
            $table->decimal('sisben', 19, 2)->nullable()->comment('CAMPO SISBEN');
            $table->integer('prm_sisben_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SISBEN');
            $table->integer('prm_discapacidad_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DISCAPACIDAD');
            $table->integer('prm_cual_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CUAL DISCAPACIDAD');
            $table->integer('prm_peso_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SOBREPESO');
            $table->integer('prm_peso_dos_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SOBREPESO');
            $table->integer('prm_leer_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SABE LEER');
            $table->integer('prm_escribir_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SABE ESCRIBIR');
            $table->integer('prm_operaciones_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SABE OPERACIONES');
            $table->integer('prm_aprobado_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ULTIMO CURSO APROBADO');
            $table->integer('prm_educacion_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ULTIMO NIVEL EDUCATIVO');
            $table->integer('prm_estudia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SIGUE ESTUDIANDO');
            $table->integer('prm_tipofuen_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE FUENTE DE INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_tipodocu_id')->references('id')->on('parametros');
            $table->foreign('prm_sexo_id')->references('id')->on('parametros');
            $table->foreign('prm_estado_civil_id')->references('id')->on('parametros');
            $table->foreign('prm_identidad_genero_id')->references('id')->on('parametros');
            $table->foreign('prm_orientacion_sexual_id')->references('id')->on('parametros');
            $table->foreign('prm_etnia_id')->references('id')->on('parametros');
            $table->foreign('prm_poblacion_etnia_id')->references('id')->on('parametros');
            $table->foreign('prm_ocupacion_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->foreign('prm_convive_id')->references('id')->on('parametros');
            $table->foreign('prm_visitado_id')->references('id')->on('parametros');
            $table->foreign('prm_vin_actual_id')->references('id')->on('parametros');
            $table->foreign('prm_vin_pasado_id')->references('id')->on('parametros');
            $table->foreign('prm_regimen_id')->references('id')->on('parametros');
            $table->foreign('prm_cualeps_id')->references('id')->on('parametros');
            $table->foreign('prm_sisben_id')->references('id')->on('parametros');
            $table->foreign('prm_discapacidad_id')->references('id')->on('parametros');
            $table->foreign('prm_cual_id')->references('id')->on('parametros');
            $table->foreign('prm_peso_id')->references('id')->on('parametros');
            $table->foreign('prm_peso_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_leer_id')->references('id')->on('parametros');
            $table->foreign('prm_escribir_id')->references('id')->on('parametros');
            $table->foreign('prm_operaciones_id')->references('id')->on('parametros');
            $table->foreign('prm_aprobado_id')->references('id')->on('parametros');
            $table->foreign('prm_educacion_id')->references('id')->on('parametros');
            $table->foreign('prm_estudia_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->unique(['s_documento', 'csd_id'],'csd_doc_un1');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS DE IDENTIFICACIÓN Y CARACTERIZACIÓN DE LOS FAMILIARES UNA PERSONA ENTREVISTADA, SECCION 7 COMPOSICION FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");
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
