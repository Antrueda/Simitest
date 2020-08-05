<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiDatosBasicosTable extends Migration
{
    private $tablaxxx = 'h_fi_datos_basicos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->bigInteger('prm_poblacion_id')->unsigned();
            $table->string('s_documento');
            $table->bigInteger('prm_documento_id')->unsigned();
            $table->bigInteger('prm_doc_fisico_id')->unsigned();

            $table->bigInteger('sis_municipioexp_id')->unsigned();
            $table->bigInteger('prm_sexo_id')->unsigned();
            $table->string('s_apodo')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->date('d_nacimiento');
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('prm_gsanguino_id')->unsigned();
            $table->bigInteger('prm_factor_rh_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('fi_nucleo_familiar_id')->unsigned();
            $table->bigInteger('prm_estado_civil_id')->unsigned();
            $table->bigInteger('prm_situacion_militar_id')->unsigned();
            $table->bigInteger('prm_clase_libreta_id')->unsigned();
            $table->bigInteger('i_prm_ayuda_id')->unsigned();

            $table->bigInteger('prm_identidad_genero_id')->unsigned();
            $table->bigInteger('prm_orientacion_sexual_id')->unsigned();
            $table->bigInteger('prm_etnia_id')->unsigned();
            $table->bigInteger('prm_poblacion_etnia_id')->unsigned();
            $table->bigInteger('prm_vestimenta_id')->unsigned();
            $table->string('s_nombre_focalizacion');
            $table->string('s_lugar_focalizacion');
            $table->bigInteger('sis_barrio_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);

            $table->timestamps();
            
            $table->bigInteger('sis_pai_id')->unsigned();
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_paiexp_id')->unsigned();
            $table->bigInteger('sis_departamentoexp_id')->unsigned();
            $table->bigInteger('i_prm_linea_base_id')->unsigned();
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