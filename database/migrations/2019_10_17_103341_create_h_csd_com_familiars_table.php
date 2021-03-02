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
            $table->integer('csd_id')->unsigned();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->integer('prm_tipodocu_id')->unsigned();
            $table->string('s_documento');
            $table->date('d_nacimiento');
            $table->integer('prm_sexo_id')->unsigned()->nullable();
            $table->integer('prm_estado_civil_id')->unsigned()->nullable();
            $table->integer('prm_identidad_genero_id')->unsigned()->nullable();
            $table->integer('prm_orientacion_sexual_id')->unsigned()->nullable();
            $table->integer('prm_etnia_id')->unsigned()->nullable();
            $table->integer('prm_poblacion_etnia_id')->unsigned()->nullable();
            $table->integer('prm_ocupacion_id')->unsigned()->nullable();
            $table->integer('prm_parentezco_id')->unsigned()->nullable();
            $table->integer('prm_convive_id')->unsigned()->nullable();
            $table->integer('prm_visitado_id')->unsigned()->nullable();
            $table->integer('prm_vin_actual_id')->unsigned()->nullable();
            $table->integer('prm_vin_pasado_id')->unsigned()->nullable();
            $table->integer('prm_regimen_id')->unsigned()->nullable();
            $table->integer('prm_cualeps_id')->unsigned()->nullable();
            $table->decimal('sisben', 19, 2)->nullable();
            $table->integer('prm_sisben_id')->unsigned()->nullable();
            $table->integer('prm_discapacidad_id')->unsigned()->nullable();
            $table->integer('prm_cual_id')->unsigned()->nullable();
            $table->integer('prm_peso_id')->unsigned()->nullable();
            $table->integer('prm_peso_dos_id')->unsigned()->nullable();
            $table->integer('prm_leer_id')->unsigned()->nullable();
            $table->integer('prm_escribir_id')->unsigned()->nullable();
            $table->integer('prm_operaciones_id')->unsigned()->nullable();
            $table->integer('prm_aprobado_id')->unsigned()->nullable();
            $table->integer('prm_educacion_id')->unsigned()->nullable();
            $table->integer('prm_estudia_id')->unsigned()->nullable();
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
