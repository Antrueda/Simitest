<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiRazonesTable extends Migration
{
    private $tablaxxx = 'fi_razones';
    private $tablaxxx2 = 'fi_documentos_anexas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('s_porque_ingresar');
            $table->bigInteger('userd_id')->unsigned();
            $table->bigInteger('sis_depend_id')->unsigned();
            $table->bigInteger('userr_id')->unsigned();
            $table->bigInteger('sis_depenr_id')->unsigned();
            $table->bigInteger('i_prm_estado_ingreso_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('userd_id')->references('id')->on('users');
            $table->foreign('userr_id')->references('id')->on('users');
            $table->foreign('sis_depend_id')->references('id')->on('sis_depens');
            $table->foreign('sis_depenr_id')->references('id')->on('sis_depens');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_estado_ingreso_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_razone_id')->unsigned();
            $table->bigInteger('i_prm_documento_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->text('s_ruta');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_razone_id')->references('id')->on('fi_razones');
            $table->foreign('i_prm_documento_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}