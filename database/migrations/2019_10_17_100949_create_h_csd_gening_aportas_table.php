<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdGeningAportasTable extends Migration
{
    private $tablaxxx = 'h_csd_gening_aportas';
    private $tablaxxx2 = 'h_csd_gening_dias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_aporta_id')->unsigned();
            $table->integer('mensual');
            $table->integer('aporte');
            $table->Integer('jornada_entre')->unsigned();
            $table->bigInteger('prm_entre_id')->unsigned();
            $table->Integer('jornada_a')->unsigned();
            $table->bigInteger('prm_a_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_aporta_id')->references('id')->on('parametros');
            $table->foreign('prm_entre_id')->references('id')->on('parametros');
            $table->foreign('prm_a_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_geningreso_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_geningreso_id')->references('id')->on('csd_gening_aportas');
            $table->unique(['parametro_id', 'csd_geningreso_id']);
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