<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHFcvGeneracioningresosTable extends Migration
{

    private $tablaxxx = 'h_fcv_generacioningresos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_actgeing_id')->unsigned()->comment('FI 7.1 ACTIVIDAD REALIZA GENERAR INGRESO');
            $table->string('s_trabajo_formal')->nullable()->comment('FI A.1 MENCIONE TRABAJO FORMAL');
            $table->integer('prm_trabinfo_id')->unsigned()->comment('FI B.1SELECCIONE TRABAJO INFORMAL');
            $table->integer('prm_otractiv_id')->unsigned()->comment('FI C.1 SELECCIONE OTRA ACTIVIDAD');
            $table->integer('prm_razgeing_id')->unsigned()->comment('FI D.1 PORQUE NO GENERA INGRESOS');
            $table->integer('diabuemp')->nullable()->comment('FI D.1.1 DIAS BUSCANDO EMPLEO');
            $table->integer('mesbuemp')->nullable()->comment('FI D.1.2 MESES BUSCANDO EMPLEO');
            $table->integer('anobuemp')->nullable()->comment('FI D.1.3 AÑOS BUSCANDO EMPLEO');
            $table->integer('prm_jorgeing_id')->unsigned()->comment('FI 7.2 EN QUE JORNADA GENERA INGRESO');
            $table->string('s_hora_inicial')->nullable()->comment('FI 7.2.1 HORA INICIAL');
            $table->string('s_hora_final')->nullable()->comment('FI 7.2.3 HORA FINAL');
            $table->integer('prm_frecingr_id')->unsigned()->comment('FI 7.4.1 FRECUENCIA RECIBE INGRESO');
            $table->integer('totinmen')->comment('FI 7.4.2 TOTAL INGRESO MENSUAL');
            $table->integer('prm_tiprelab_id')->unsigned()->comment('FI 7.5 TIPO RELACION LABORAL');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA GENERACIÓN DE INGRESO');
            $table = CamposMagicos::h_magicos($table);
        });
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
