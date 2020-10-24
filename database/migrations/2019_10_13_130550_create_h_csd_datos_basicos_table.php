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
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->string('s_apodo')->nullable();
            $table->bigInteger('prm_sexo_id')->unsigned();
            $table->bigInteger('prm_identidad_genero_id')->unsigned();
            $table->bigInteger('prm_orientacion_sexual_id')->unsigned();
            $table->date('d_nacimiento');

            $table->bigInteger('sis_pai_id')->unsigned();
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('prm_tipodocu_id')->unsigned();
            $table->bigInteger('prm_doc_fisico_id')->unsigned();
            $table->bigInteger('prm_ayuda_id')->unsigned()->nullable();
            $table->string('s_documento');



            $table->bigInteger('sis_paiexp_id')->unsigned();
            $table->bigInteger('sis_departamentoexp_id')->unsigned();
            $table->bigInteger('sis_municipioexp_id')->unsigned()->nullable();
            $table->bigInteger('prm_gsanguino_id')->unsigned();
            $table->bigInteger('prm_factor_rh_id')->unsigned();
            $table->bigInteger('prm_situacion_militar_id')->unsigned()->nullable();
            $table->bigInteger('prm_clase_libreta_id')->unsigned()->nullable();
            $table->bigInteger('prm_estado_civil_id')->unsigned();
            $table->bigInteger('prm_etnia_id')->unsigned();
            $table->bigInteger('prm_poblacion_etnia_id')->unsigned()->nullable();
            $table->bigInteger('prm_tipoblaci_id')->unsigned()->nullable();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
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
