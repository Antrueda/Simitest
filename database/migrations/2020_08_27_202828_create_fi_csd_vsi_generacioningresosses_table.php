<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiCsdVsiGeneracioningresossesTable extends Migration
{
    private $tablaxxx = 'fi_csd_vsi_geni';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_actividad_genera_ingreso_id')->unsigned()->comment('FI 7.1 ACTIVIDAD REALIZA GENERAR INGRESO');
            $table->string('s_trabajo_formal')->nullable()->comment('FI A.1 MENCIONE TRABAJO FORMAL');
            $table->bigInteger('i_prm_trabajo_informal_id')->unsigned()->comment('FI B.1SELECCIONE TRABAJO INFORMAL');
            $table->bigInteger('i_prm_otra_actividad_id')->unsigned()->comment('FI C.1 SELECCIONE OTRA ACTIVIDAD');
            $table->bigInteger('i_prm_jornada_genera_ingreso_id')->unsigned()->comment('FI 7.2 EN QUE JORNADA GENERA INGRESO');
            $table->string('s_hora_inicial')->nullable()->comment('FI 7.2.1 HORA INICIAL');
            $table->string('s_hora_final')->nullable()->comment('FI 7.2.3 HORA FINAL');
            $table->bigInteger('i_prm_frec_ingreso_id')->unsigned()->comment('FI 7.4.1 FRECUENCIA RECIBE INGRESO');
            $table->bigInteger('i_total_ingreso_mensual')->comment('FI 7.4.2 TOTAL INGRESO MENSUAL');
            $table->bigInteger('i_prm_tipo_relacion_laboral_id')->unsigned()->comment('FI 7.5 TIPO RELACION LABORAL');
            $table->bigInteger('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA GENERACIÓN DE INGRESO');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_trabajo_informal_id')->references('id')->on('parametros');
            $table->foreign('i_prm_otra_actividad_id')->references('id')->on('parametros');

            $table->foreign('i_prm_jornada_genera_ingreso_id')->references('id')->on('parametros');
            $table->foreign('i_prm_frec_ingreso_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_relacion_laboral_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE LOS DETALLES DE LA GENERACION DE LOS
        INGRESOS POR PARTE LA PERSONA ENTREVISTADA PARA FI, CSD Y VSI'");

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
