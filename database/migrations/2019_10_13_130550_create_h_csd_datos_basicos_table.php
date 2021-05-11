<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdDatosBasicosTable extends Migration
{
    private $tablaxxx = 'h_csd_datos_basicos';
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
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
