<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiConsumosTable extends Migration
{
    private $tablaxxx = 'vsi_consumos';
    private $tablaxxx2 = 'vsi_consumo_quien';
    private $tablaxxx3 = 'vsi_consumo_expectativa';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_consumo_id')->unsigned();
            $table->Integer('cantidad')->unsigned()->nullable();
            $table->Integer('inicio')->unsigned()->nullable();
            $table->bigInteger('prm_contexto_ini_id')->unsigned()->nullable();
            $table->bigInteger('prm_consume_id')->unsigned()->nullable();
            $table->bigInteger('prm_contexto_man_id')->unsigned()->nullable();
            $table->bigInteger('prm_problema_id')->unsigned()->nullable();
            $table->string('porque')->nullable();
            $table->bigInteger('prm_motivo_id')->unsigned()->nullable();
            $table->bigInteger('prm_expectativa_id')->unsigned()->nullable();
            $table->bigInteger('prm_familia_id')->unsigned();
            $table->string('descripcion', 4000)->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_consumo_id')->references('id')->on('parametros');
            $table->foreign('prm_contexto_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_consume_id')->references('id')->on('parametros');
            $table->foreign('prm_contexto_man_id')->references('id')->on('parametros');
            $table->foreign('prm_problema_id')->references('id')->on('parametros');
            $table->foreign('prm_motivo_id')->references('id')->on('parametros');
            $table->foreign('prm_expectativa_id')->references('id')->on('parametros');
            $table->foreign('prm_familia_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_consumo_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_consumo_id')->references('id')->on('vsi_consumos');
            $table->unique(['parametro_id', 'vsi_consumo_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_consumo_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_consumo_id')->references('id')->on('vsi_consumos');
            $table->unique(['parametro_id', 'vsi_consumo_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'P'");
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