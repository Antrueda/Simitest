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
            $table->integer('prm_tipofuen_id')->unsigned();
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
