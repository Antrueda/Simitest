<?php

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
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('identitario')->nullable();
            $table->bigInteger('prm_documento_id')->unsigned();
            $table->string('documento');
            $table->date('nacimiento');
            $table->bigInteger('prm_sexo_id')->unsigned();
            $table->bigInteger('prm_estadoivil_id')->unsigned();
            $table->bigInteger('prm_genero_id')->unsigned()->nullable();
            $table->bigInteger('prm_sexual_id')->unsigned()->nullable();
            $table->bigInteger('prm_grupo_etnico_id')->unsigned();
            $table->bigInteger('prm_cualGrupo_id')->unsigned()->nullable();
            $table->bigInteger('prm_ocupacion_id')->unsigned();
            $table->bigInteger('prm_parentezco_id')->unsigned();
            $table->bigInteger('prm_convive_id')->unsigned();
            $table->bigInteger('prm_visitado_id')->unsigned();
            $table->bigInteger('prm_vin_actual_id')->unsigned();
            $table->bigInteger('prm_vin_pasado_id')->unsigned();
            $table->bigInteger('prm_regimen_id')->unsigned();
            $table->bigInteger('prm_cualeps_id')->unsigned()->nullable();
            $table->Integer('sisben')->unsigned()->nullable();
            $table->bigInteger('prm_sisben_id')->unsigned();
            $table->bigInteger('prm_discapacidad_id')->unsigned();
            $table->bigInteger('prm_cual_id')->unsigned()->nullable();
            $table->bigInteger('prm_peso_id')->unsigned();
            $table->bigInteger('prm_peso_dos_id')->unsigned();
            $table->bigInteger('prm_leer_id')->unsigned();
            $table->bigInteger('prm_escribir_id')->unsigned();
            $table->bigInteger('prm_operaciones_id')->unsigned();
            $table->bigInteger('prm_aprobado_id')->unsigned();
            $table->bigInteger('prm_educacion_id')->unsigned();
            $table->bigInteger('prm_estudia_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();

            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps();
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