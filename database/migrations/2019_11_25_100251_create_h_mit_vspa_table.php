<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHMitVspaTable extends Migration
{
    private $tablaxxx = 'h_mit_vspa';
    private $tablaxxx2 = 'h_mit_vspa_tabla';
    private $tablaxxx3 = 'h_mit_vspa_tabla_dos';
    private $tablaxxx4 = 'h_mit_vspa_tabla_tres';
    private $tablaxxx5 = 'h_mit_vspa_tabla_cuatro';
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
            $table->text('descripcion', 4000)->nullable();
            $table->bigInteger('prm_obtiene_id')->unsigned()->nullable();
            $table->string('donde', 120)->nullable();
            $table->Integer('precio')->nullable();
            $table->Integer('cantidad')->nullable();
            $table->bigInteger('prm_medida_id')->unsigned()->nullable();
            $table->bigInteger('prm_frecuencia_id')->unsigned()->nullable();
            $table->bigInteger('prm_costumbre_id')->unsigned()->nullable();
            $table->text('porque', 4000)->nullable();
            $table->string('sustancia', 120)->nullable();
            $table->bigInteger('prm_comparte_id')->unsigned()->nullable();
            $table->text('porque_comparte', 4000)->nullable();
            $table->bigInteger('prm_prueba_id')->unsigned()->nullable();
            $table->text('porque_prueba', 4000)->nullable();
            $table->text('observaciones', 4000)->nullable();
            $table->text('obs_generales', 4000);
            $table->text('obs_generales_dos', 4000);
            $table->bigInteger('user_doc1_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

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
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

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
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

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
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mit_vspa_id')->unsigned();
            $table->bigInteger('prm_seis_uno_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_seis_seis_id')->unsigned()->nullable();
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");
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