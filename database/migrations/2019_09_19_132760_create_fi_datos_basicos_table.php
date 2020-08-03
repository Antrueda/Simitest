<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiDatosBasicosTable extends Migration
{
    private $tablaxxx = 'fi_datos_basicos';
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
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->bigInteger('sis_pai_id')->unsigned();
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_paiexp_id')->unsigned();
            $table->bigInteger('sis_departamentoexp_id')->unsigned();
            $table->bigInteger('i_prm_linea_base_id')->unsigned();



            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_poblacion_id')->references('id')->on('parametros');
            $table->foreign('prm_sexo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_linea_base_id')->references('id')->on('parametros');


            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('prm_gsanguino_id')->references('id')->on('parametros');
            $table->foreign('prm_factor_rh_id')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('fi_nucleo_familiar_id')->references('id')->on('fi_nucleo_familiars');
            $table->foreign('prm_estado_civil_id')->references('id')->on('parametros');
            $table->foreign('prm_situacion_militar_id')->references('id')->on('parametros');
            $table->foreign('prm_clase_libreta_id')->references('id')->on('parametros');
            $table->foreign('prm_identidad_genero_id')->references('id')->on('parametros');
            $table->foreign('prm_orientacion_sexual_id')->references('id')->on('parametros');
            $table->foreign('prm_etnia_id')->references('id')->on('parametros');
            $table->foreign('prm_poblacion_etnia_id')->references('id')->on('parametros');
            $table->foreign('prm_vestimenta_id')->references('id')->on('parametros');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('prm_documento_id')->references('id')->on('parametros');
            $table->foreign('prm_doc_fisico_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ayuda_id')->references('id')->on('parametros');
            $table->foreign('sis_municipioexp_id')->references('id')->on('sis_municipios');

            $table->foreign('sis_pai_id')->references('id')->on('sis_pais');
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('sis_paiexp_id')->references('id')->on('sis_pais');
            $table->foreign('sis_departamentoexp_id')->references('id')->on('sis_departamentos');
            $table->unique(['sis_esta_id','s_documento']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DE LAS PERSONAS QUE HACEN PARTE DE LA COMPOSICIÓN FAMILIAR DEL NNAJ, YA SEA QUE VENGAN DE LA FICHA DE INGRESO, VALORACIÓN SICOSOCIAL O CONSULTA SOCIAL EN DOMICILIO.'");
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