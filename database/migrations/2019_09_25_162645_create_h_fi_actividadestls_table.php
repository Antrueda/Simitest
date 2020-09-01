<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiActividadestlsTable extends Migration
{
    private $tablaxxx = 'h_fi_actividadestls';
    private $tablaxxx2 = 'h_fi_actividad_tiempo_libres';
    private $tablaxxx3 = 'h_fi_sacramentos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_horas_permanencia_calle')->unsigned()->nullable();
            $table->bigInteger('i_dias_permanencia_calle')->unsigned()->nullable();
            $table->bigInteger('i_prm_pertenece_parche_id')->unsigned()->nullable();
            $table->string('s_nombre_parche')->nullable();
            $table->bigInteger('i_prm_acceso_recreacion_id')->unsigned()->nullable();
            $table->bigInteger('i_prm_practica_religiosa_id')->unsigned()->nullable();
            $table->bigInteger('i_prm_religion_practica_id')->unsigned()->nullable();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_actividadestl_id')->unsigned()->comment('REGISTRO ACTIVIDAD DE TIEMPO LIBRE AL QUE SE LE ASIGNA LA ACTIVIDAD');
            $table->bigIntegeR('i_prm_actividad_tl_id')->unsigned()->comment('FI 8.3 ACTIVIDADES TIEMPO LIBRE');
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_actividadestl_id')->unsigned()->comment('REGISTRO ACTIVIDAD DE TIEMPO LIBRE AL QUE SE LE ASIGNA EL SACRAMENTO');
            $table->bigInteger('i_prm_sacramentos_hechos_id')->unsigned()->comment('FI 8.8 SACRAMENTOS HECHOS');
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
