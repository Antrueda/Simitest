<?php

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
            $table->timestamps();
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