<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMitVspaTable extends Migration
{
    private $tablaxxx = 'mit_vspa';
    private $tablaxxx2 = 'mit_vspa_tabla';
    private $tablaxxx3 = 'mit_vspa_tabla_dos';
    private $tablaxxx4 = 'mit_vspa_tabla_tres';
    private $tablaxxx5 = 'mit_vspa_tabla_cuatro';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_upi_id')->unsigned()->nullable();
            $table->date('fecha');
            $table->bigInteger('prm_valoracion_id')->unsigned()->nullable();
            $table->bigInteger('prm_icbf_id')->unsigned()->nullable();
            $table->Integer('previos')->nullable();
            $table->bigInteger('prm_gestante_id')->unsigned()->nullable();
            $table->Integer('semanas_gestacion')->nullable();
            $table->bigInteger('prm_escolar_id')->unsigned()->nullable();
            $table->bigInteger('prm_ingresos_id')->unsigned()->nullable();
            $table->bigInteger('prm_modalidad_id')->unsigned()->nullable();
            $table->bigInteger('prm_acude_id')->unsigned()->nullable();
            $table->bigInteger('prm_sitio_id')->unsigned()->nullable();
            $table->bigInteger('prm_probado_id')->unsigned()->nullable();
            $table->bigInteger('prm_cantidad_id')->unsigned()->nullable();
            $table->bigInteger('prm_inyectadas_id')->unsigned()->nullable();
            $table->Integer('edad')->nullable();
            $table->bigInteger('prm_dificultad_id')->unsigned()->nullable();
            $table->longText('descripcion')->nullable();
            $table->bigInteger('prm_obtiene_id')->unsigned()->nullable();
            $table->string('donde', 120)->nullable();
            $table->Integer('precio')->nullable();
            $table->Integer('cantidad')->nullable();
            $table->bigInteger('prm_medida_id')->unsigned()->nullable();
            $table->bigInteger('prm_frecuencia_id')->unsigned()->nullable();
            $table->bigInteger('prm_costumbre_id')->unsigned()->nullable();
            $table->longText('porque')->nullable();
            $table->string('sustancia', 120)->nullable();
            $table->bigInteger('prm_comparte_id')->unsigned()->nullable();
            $table->longText('porque_comparte')->nullable();
            $table->bigInteger('prm_prueba_id')->unsigned()->nullable();
            $table->longText('porque_prueba')->nullable();
            $table->longText('observaciones')->nullable();
            $table->longText('obs_generales');
            $table->longText('obs_generales_dos');
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->foreign('sis_nnaj_id','mivspa_pk1')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id','mivspa_pk2')->references('id')->on('parametros');
            $table->foreign('prm_valoracion_id','mivspa_pk3')->references('id')->on('parametros');
            $table->foreign('prm_icbf_id','mivspa_pk4')->references('id')->on('parametros');
            $table->foreign('prm_gestante_id','mivspa_pk5')->references('id')->on('parametros');
            $table->foreign('prm_escolar_id','mivspa_pk6')->references('id')->on('parametros');
            $table->foreign('prm_ingresos_id','mivspa_pk7')->references('id')->on('parametros');
            $table->foreign('prm_modalidad_id','mivspa_pk8')->references('id')->on('parametros');
            $table->foreign('prm_acude_id','mivspa_pk9')->references('id')->on('parametros');
            $table->foreign('prm_sitio_id','mivspa_pk10')->references('id')->on('parametros');
            $table->foreign('prm_probado_id','mivspa_pk11')->references('id')->on('parametros');
            $table->foreign('prm_cantidad_id','mivspa_pk12')->references('id')->on('parametros');
            $table->foreign('prm_inyectadas_id','mivspa_pk13')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id','mivspa_pk14')->references('id')->on('parametros');
            $table->foreign('prm_obtiene_id','mivspa_pk15')->references('id')->on('parametros');
            $table->foreign('prm_medida_id','mivspa_pk16')->references('id')->on('parametros');
            $table->foreign('prm_frecuencia_id','mivspa_pk17')->references('id')->on('parametros');
            $table->foreign('prm_costumbre_id','mivspa_pk18')->references('id')->on('parametros');
            $table->foreign('prm_comparte_id','mivspa_pk19')->references('id')->on('parametros');
            $table->foreign('prm_prueba_id','mivspa_pk20')->references('id')->on('parametros');
            $table->foreign('user_doc1_id','mivspa_pk21')->references('id')->on('users');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA DETALLES SOBRE EL CONSUMO DE ESTUPERFACCIONES, MITIGACION'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mit_vspa_id')->unsigned();

            $table->bigInteger('prm_droga_ini_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_ini_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_ini_id')->unsigned()->nullable();
            $table->Integer('primera_ini')->nullable();
            $table->bigInteger('prm_mes_ini_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_ini_id')->unsigned()->nullable();
            $table->Integer('ultima_ini')->nullable();
            $table->bigInteger('prm_imp_ini_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_dos_id')->unsigned()->nullable();
            $table->Integer('primera_dos')->nullable();
            $table->bigInteger('prm_mes_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_dos_id')->unsigned()->nullable();
            $table->Integer('ultima_dos')->nullable();
            $table->bigInteger('prm_imp_dos_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_tres_id')->unsigned()->nullable();
            $table->Integer('primera_tres')->nullable();
            $table->bigInteger('prm_mes_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_tres_id')->unsigned()->nullable();
            $table->Integer('ultima_tres')->nullable();
            $table->bigInteger('prm_imp_tres_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_cuatro_id')->unsigned()->nullable();
            $table->Integer('primera_cuatro')->nullable();
            $table->bigInteger('prm_mes_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_cuatro_id')->unsigned()->nullable();
            $table->Integer('ultima_cuatro')->nullable();
            $table->bigInteger('prm_imp_cuatro_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_cinco_id')->unsigned()->nullable();
            $table->Integer('primera_cinco')->nullable();
            $table->bigInteger('prm_mes_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_cinco_id')->unsigned()->nullable();
            $table->Integer('ultima_cinco')->nullable();
            $table->bigInteger('prm_imp_cinco_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_seis_id')->unsigned()->nullable();
            $table->Integer('primera_seis')->nullable();
            $table->bigInteger('prm_mes_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_seis_id')->unsigned()->nullable();
            $table->Integer('ultima_seis')->nullable();
            $table->bigInteger('prm_imp_seis_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_siete_id')->unsigned()->nullable();
            $table->Integer('primera_siete')->nullable();
            $table->bigInteger('prm_mes_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_siete_id')->unsigned()->nullable();
            $table->Integer('ultima_siete')->nullable();
            $table->bigInteger('prm_imp_siete_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_dmi_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_dmi_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_dmi_id')->unsigned()->nullable();
            $table->Integer('primera_dmi')->nullable();
            $table->bigInteger('prm_mes_dmi_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_dmi_id')->unsigned()->nullable();
            $table->Integer('ultima_dmi')->nullable();
            $table->bigInteger('prm_imp_dmi_id')->unsigned()->nullable();

            $table->foreign('prm_droga_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_via_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_via_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_via_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_via_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_via_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_via_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_via_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_via_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_dmi_id')->references('id')->on('parametros');
            $table->foreign('mit_vspa_id')->references('id')->on('mit_vspa');
            $table->unique(['id', 'mit_vspa_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA SEGUIMIENTO DEL SONCUMO DE DROGAS, MITIGACION'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mit_vspa_id')->unsigned();
            $table->bigInteger('prm_cuatro_uno_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_ocho_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_nueve_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_diez_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_once_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_doce_id')->unsigned()->nullable();
            $table->foreign('prm_cuatro_uno_id','mivedo_pk1')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_dos_id','mivedo_pk2')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_tres_id','mivedo_pk3')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_cuatro_id','mivedo_pk4')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_cinco_id','mivedo_pk5')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_seis_id','mivedo_pk6')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_siete_id','mivedo_pk7')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_ocho_id','mivedo_pk8')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_nueve_id','mivedo_pk9')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_diez_id','mivedo_pk10')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_once_id','mivedo_pk11')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_doce_id','mivedo_pk12')->references('id')->on('parametros');
            $table->foreign('mit_vspa_id','mivedo_pk13')->references('id')->on('mit_vspa');
            $table->unique(['id', 'mit_vspa_id'],'mivedo_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE RELACIONA LOS DETALLES DEL CONSUMO DE ESTUPERFACIENTES CON LOS SEGUIMIENTOS, MITIGACION'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mit_vspa_id')->unsigned();
            $table->bigInteger('prm_cinco_uno_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_ocho_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_nueve_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_diez_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_once_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_doce_id')->unsigned()->nullable();
            $table->foreign('prm_cinco_uno_id','mivetr_pk1')->references('id')->on('parametros');
            $table->foreign('prm_cinco_dos_id','mivetr_pk2')->references('id')->on('parametros');
            $table->foreign('prm_cinco_tres_id','mivetr_pk3')->references('id')->on('parametros');
            $table->foreign('prm_cinco_cuatro_id','mivetr_pk4')->references('id')->on('parametros');
            $table->foreign('prm_cinco_cinco_id','mivetr_pk5')->references('id')->on('parametros');
            $table->foreign('prm_cinco_seis_id','mivetr_pk6')->references('id')->on('parametros');
            $table->foreign('prm_cinco_siete_id','mivetr_pk7')->references('id')->on('parametros');
            $table->foreign('prm_cinco_ocho_id','mivetr_pk8')->references('id')->on('parametros');
            $table->foreign('prm_cinco_nueve_id','mivetr_pk9')->references('id')->on('parametros');
            $table->foreign('prm_cinco_diez_id','mivetr_pk10')->references('id')->on('parametros');
            $table->foreign('prm_cinco_once_id','mivetr_pk11')->references('id')->on('parametros');
            $table->foreign('prm_cinco_doce_id','mivetr_pk12')->references('id')->on('parametros');
            $table->foreign('mit_vspa_id','mivetr_pk13')->references('id')->on('mit_vspa');
            $table->unique(['id', 'mit_vspa_id'],'mivetr_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE RELACIONA LOS DETALLES DEL CONSUMO DE ESTUPERFACIENTES CON LOS SEGUIMIENTOS, MITIGACION'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mit_vspa_id')->unsigned();
            $table->bigInteger('prm_seis_uno_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_seis_id')->unsigned()->nullable();
            $table->foreign('prm_seis_uno_id')->references('id')->on('parametros');
            $table->foreign('prm_seis_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_seis_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_seis_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_seis_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_seis_seis_id')->references('id')->on('parametros');
            $table->foreign('mit_vspa_id')->references('id')->on('mit_vspa');
            $table->unique(['id', 'mit_vspa_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE RELACIONA LOS DETALLES DEL CONSUMO DE ESTUPERFACIENTES CON LOS SEGUIMIENTOS, MITIGACION'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
