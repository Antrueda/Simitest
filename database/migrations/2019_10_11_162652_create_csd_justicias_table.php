<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCsdJusticiasTable extends Migration
{
    private $tablaxxx = 'csds';
    private $tablaxxx2 = 'csd_sis_nnaj';
    private $tablaxxx3 = 'csd_justicias';
    private $tablaxxx4 = 'csd_nnaj_especial';    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proposito', 200);
            $table->date('fecha');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->unique(['csd_id', 'sis_nnaj_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_vinculado_id')->unsigned();
            $table->bigInteger('prm_vin_causa_id')->unsigned()->nullable();
            $table->bigInteger('prm_riesgo_id')->unsigned();
            $table->bigInteger('prm_rie_causa_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_vinculado_id')->references('id')->on('parametros');
            $table->foreign('prm_vin_causa_id')->references('id')->on('parametros');
            $table->foreign('prm_riesgo_id')->references('id')->on('parametros');
            $table->foreign('prm_rie_causa_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'P'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'P'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}