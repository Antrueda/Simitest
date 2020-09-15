<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiSaludsTable extends Migration
{
    private $tablaxxx = 'h_fi_saluds';
    private $tablaxxx2 = 'h_fi_enfermedades_familias';
    private $tablaxxx3 = 'h_fi_eventos_medicos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_regimen_salud_id')->unsigned(); //->comment('FI 6.1 REGIMEN SALUD');
            $table->bigInteger('sis_entidad_salud_id')->unsigned(); //->comment('FI 6.2 ENTIDAD  / REGIMEN'); // OTRA TABLA
            $table->bigInteger('i_prm_tiene_sisben_id')->nullable()->unsigned(); //->comment('FI 6.3.1 TIENE SISBEN');
            $table->decimal('d_puntaje_sisben', 19, 2)->nullable(); //->comment('FI 6.3.2 PUNTAJE SISBEN');
            $table->bigInteger('i_prm_tiene_discapacidad_id')->unsigned(); //->comment('FI 6.4.1 TIENE DISCAPACIDAD');
            $table->bigInteger('i_prm_tipo_discapacidad_id')->unsigned(); //->comment('FI 6.4.2 TIPO DISCAPACIDAD');
            $table->bigIntegeR('i_prm_tiene_cert_discapacidad_id')->unsigned(); //->comment('FI 6.5 TIENE CERTIFICADO DISCAPACIDAD');
            $table->bigIntegeR('i_prm_disc_perm_independencia_id')->unsigned(); //->comment('FI 6.6 DISCAPACIDAD PERMITE INDEPENDENCIA');
            $table->bigIntegeR('i_prm_esta_gestando_id')->unsigned(); //->comment('FI 6.7 SE ENCUENTRA EN ESTADO GESTACIÓN');
            $table->bigIntegeR('i_numero_semanas')->nullable(); //->comment('FI 6.8 NÚMERO DE SEMANAS');
            $table->bigIntegeR('i_prm_esta_lactando_id')->unsigned(); //->comment('FI 6.9 SE ENCUENTRA LACTANDO');
            $table->bigIntegeR('i_numero_meses')->nullable(); //->comment('FI 6.10 NÚMERO DE MESES');
            $table->bigIntegeR('i_prm_tiene_problema_salud_id')->unsigned(); //->comment('FI 6.11 TIENE PROBLEMAS DE SALUD');
            $table->bigIntegeR('i_prm_problema_salud_id')->nullable()->unsigned(); //->comment('FI 6.11.1 CUAL PROBLEMA SALUD');
            $table->bigIntegeR('i_prm_consume_medicamentos_id')->unsigned(); //->comment('FI 6.12 CONSUME MEDICAMENTOS DE FORMA PERMANENTE');
            $table->string('s_cual_medicamento')->nullable(); //->comment('FI 6.12.1 CUAL MEDICAMENTO');
            $table->bigIntegeR('i_prm_tiene_hijos_id')->unsigned(); //->comment('FI 6.13 TIENE HIJOS');
            $table->bigIntegeR('i_numero_hijos')->nullable(); //->comment('FI 6.14 NÚMERO DE HIJOS');
            $table->bigIntegeR('i_prm_conoce_metodos_id')->unsigned(); //->comment('FI 6.16 CONOCE METODOS ANTICONCEPTIVOS');
            $table->bigIntegeR('i_prm_usa_metodos_id')->unsigned(); //->comment('FI 6.17 USA METODOS ANTICONCEPTIVOS');
            $table->bigIntegeR('i_prm_cual_metodo_id')->unsigned(); //->comment('FI 6.18 CUAL METODO UTILIZA');
            $table->bigIntegeR('i_prm_uso_voluntario_id')->unsigned(); //->comment('FI 6.19 LO USA VOLUNTARIAMENTE');
            $table->bigIntegeR('i_comidas_diarias'); //->comment('FI 6.24 COMIDAS CONSUME AL DIA');
            $table->bigIntegeR('i_prm_razon_no_cinco_comidas_id')->unsigned(); //->comment('FI 6.25 RAZON NO CONSUME 5 COMIDAS AL DIA');
            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA SALUD');
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_salud_id')->unsigned(); //->comment('REGISTRO SALUD AL QUE SE LE ASIGNA LA ENFERMEDAD FAMILIA');
            $table->bigIntegeR('fi_compfami_id')->unsigned(); //->comment('FI 6.17 MIEMBRO FAMILIA');
            $table->string('s_tipo_enfermedad'); //->comment('FI TIPO ENFERMEDAD');
            $table->bigIntegeR('i_prm_recibe_medicina_id')->unsigned(); //->comment('FI RECIBE MEDICAMENTOS');
            $table->string('s_medicamento'); //->comment('FI CUAL MEDICAMENTO');
            $table->bigIntegeR('i_prm_rec_tratamiento_id')->unsigned(); //->comment('FI HA RECIBIDO TRATAMIENTO');
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_salud_id')->unsigned(); //->comment('REGISTRO SALUD AL QUE SE LE ASIGNA EL EVENTO MEDICO');
            $table->bigIntegeR('i_prm_evento_medico_id')->unsigned(); //->comment('FI 6.15 EVENTOS MÉDICOS');
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
