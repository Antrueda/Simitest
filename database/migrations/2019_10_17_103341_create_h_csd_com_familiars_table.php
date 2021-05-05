<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdComFamiliarsTable extends Migration
{
    private $tablaxxx = 'h_csd_com_familiars';
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
            $table->string('s_primer_apellido')->comment('CAMPO PRIMER APELLIDO');
            $table->string('s_segundo_apellido')->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('s_primer_nombre')->comment('CAMPO PRIMER NOMBRE');
            $table->string('s_segundo_nombre')->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->string('s_nombre_identitario')->nullable()->comment('CAMPO NOMBRE IDENTITARIO');
            $table->integer('prm_tipodocu_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE DOCUMENTO');
            $table->string('s_documento')->comment('CAMPO NUMERO DE DOCUMENTO');
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
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
