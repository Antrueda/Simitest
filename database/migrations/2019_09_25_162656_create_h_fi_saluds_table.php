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
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_regisalu_id')->unsigned()->comment('FI 6.1 REGIMEN SALUD');
            $table->integer('sis_entidad_salud_id')->unsigned()->comment('FI 6.2 ENTIDAD  / REGIMEN');// OTRA TABLA
            $table->integer('prm_tiensisb_id')->nullable()->unsigned()->comment('FI 6.3.1 TIENE SISBEN');
            $table->decimal('d_puntaje_sisben', 19, 2)->nullable()->comment('FI 6.3.2 PUNTAJE SISBEN');
            $table->integer('prm_tiendisc_id')->unsigned()->comment('FI 6.4.1 TIENE DISCAPACIDAD');
            $table->integer('prm_tipodisca_id')->unsigned()->comment('FI 6.4.2 TIPO DISCAPACIDAD');
            $table->integer('prm_tiecedis_id')->unsigned()->comment('FI 6.5 TIENE CERTIFICADO DISCAPACIDAD');
            $table->integer('prm_dispeind_id')->unsigned()->comment('FI 6.6 DISCAPACIDAD PERMITE INDEPENDENCIA');
            $table->integer('prm_estagest_id')->nullable()->unsigned()->comment('FI 6.7 SE ENCUENTRA EN ESTADO GESTACIÓN');
            $table->integer('i_numero_semanas')->nullable()->comment('FI 6.8 NÚMERO DE SEMANAS');
            $table->integer('prm_estalact_id')->nullable()->unsigned()->comment('FI 6.9 SE ENCUENTRA LACTANDO');
            $table->integer('i_numero_meses')->nullable()->comment('FI 6.10 NÚMERO DE MESES');
            $table->integer('prm_tieprsal_id')->unsigned()->comment('FI 6.11 TIENE PROBLEMAS DE SALUD');
            $table->integer('prm_probsalu_id')->nullable()->unsigned()->comment('FI 6.11.1 CUAL PROBLEMA SALUD');
            $table->integer('prm_consmedi_id')->unsigned()->comment('FI 6.12 CONSUME MEDICAMENTOS DE FORMA PERMANENTE');
            $table->string('s_cual_medicamento')->nullable()->comment('FI 6.12.1 CUAL MEDICAMENTO');
            $table->integer('prm_tienhijo_id')->unsigned()->comment('FI 6.13 TIENE HIJOS');
            $table->integer('i_numero_hijos')->nullable()->comment('FI 6.14 NÚMERO DE HIJOS');
            $table->integer('prm_conometo_id')->unsigned()->comment('FI 6.16 CONOCE METODOS ANTICONCEPTIVOS');
            $table->integer('prm_usametod_id')->unsigned()->comment('FI 6.17 USA METODOS ANTICONCEPTIVOS');
            $table->integer('prm_cualmeto_id')->unsigned()->comment('FI 6.18 CUAL METODO UTILIZA');
            $table->integer('prm_usovolun_id')->unsigned()->comment('FI 6.19 LO USA VOLUNTARIAMENTE');
            $table->integer('i_comidas_diarias')->comment('FI 6.24 COMIDAS CONSUME AL DIA');
            $table->integer('prm_razcicom_id')->unsigned()->comment('FI 6.25 RAZON NO CONSUME 5 COMIDAS AL DIA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA SALUD');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_salud_id')->unsigned()->comment('REGISTRO SALUD AL QUE SE LE ASIGNA LA ENFERMEDAD FAMILIA');
            $table->integer('fi_compfami_id')->unsigned()->comment('FI 6.17 MIEMBRO FAMILIA');
            $table->string('s_tipo_enfermedad')->comment('FI TIPO ENFERMEDAD');
            $table->integer('prm_recimedi_id')->unsigned()->comment('FI RECIBE MEDICAMENTOS');
            $table->string('s_medicamento')->nullable()->comment('FI CUAL MEDICAMENTO');
            $table->integer('prm_rectrata_id')->unsigned()->comment('FI HA RECIBIDO TRATAMIENTO');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_salud_id')->unsigned()->comment('REGISTRO SALUD AL QUE SE LE ASIGNA EL EVENTO MEDICO');
            $table->integer('prm_evenmedi_id')->unsigned()->comment('FI 6.15 EVENTOS MÉDICOS');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");
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
