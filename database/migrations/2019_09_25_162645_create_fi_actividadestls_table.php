<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiActividadestlsTable extends Migration
{
    private $tablaxxx = 'fi_actividadestls';
    private $tablaxxx2 = 'fi_actividad_tiempo_libres';
    private $tablaxxx3 = 'fi_sacramentos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_horas_permanencia_calle')->unsigned();
            $table->bigInteger('i_dias_permanencia_calle')->unsigned();
            $table->bigInteger('i_prm_pertenece_parche_id')->unsigned();
            $table->string('s_nombre_parche');
            $table->bigInteger('i_prm_acceso_recreacion_id')->unsigned();
            $table->bigInteger('i_prm_practica_religiosa_id')->unsigned();
            $table->bigInteger('i_prm_religion_practica_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_pertenece_parche_id')->references('id')->on('parametros');
            $table->foreign('i_prm_acceso_recreacion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_practica_religiosa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_religion_practica_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_actividadestl_id')->unsigned()->comment('REGISTRO ACTIVIDAD DE TIEMPO LIBRE AL QUE SE LE ASIGNA LA ACTIVIDAD');
            $table->bigIntegeR('i_prm_actividad_tl_id')->unsigned()->comment('FI 8.3 ACTIVIDADES TIEMPO LIBRE');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_actividadestl_id')->references('id')->on('fi_actividadestls');
            $table->foreign('i_prm_actividad_tl_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_actividadestl_id')->unsigned()->comment('REGISTRO ACTIVIDAD DE TIEMPO LIBRE AL QUE SE LE ASIGNA EL SACRAMENTO');
            $table->bigInteger('i_prm_sacramentos_hechos_id')->unsigned()->comment('FI 8.8 SACRAMENTOS HECHOS');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_actividadestl_id')->references('id')->on('fi_actividadestls');
            $table->foreign('i_prm_sacramentos_hechos_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'P'");
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
