<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiSituacionEspecialsTable extends Migration
{
    private $tablaxxx = 'fi_situacion_especials';
    private $tablaxxx2 = 'fi_riesgo_escnnas';
    private $tablaxxx3 = 'fi_situacion_vulneracions';
    private $tablaxxx4 = 'fi_victima_escnnas';
    private $tablaxxx5 = 'fi_razon_iniciados';
    private $tablaxxx6 = 'fi_razon_continuas';
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
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('i_prm_tipo_id')->nullable()->unsigned();
            $table->bigInteger('i_tiempo')->nullable();
            $table->bigInteger('i_prm_ttiempo_id')->nullable()->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_tipo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ttiempo_id')->references('id')->on('parametros');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_situacion_vulnera_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_situacion_vulnera_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'P'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_victima_escnna_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_victima_escnna_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_riesgo_escnna_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_riesgo_escnna_id')->references('id')->on('parametros');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_iniciado_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_iniciado_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'P'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_situacion_especial_id')->unsigned();
            $table->bigInteger('i_prm_continua_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_continua_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_situacion_especial_id')->references('id')->on('fi_situacion_especials');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'P'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}