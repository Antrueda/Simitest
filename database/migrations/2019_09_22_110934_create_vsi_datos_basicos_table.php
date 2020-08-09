<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVsiDatosBasicosTable extends Migration
{
    private $tablaxxx = 'vsis';
    private $tablaxxx2 = 'vsi_nnaj_familiar';
    private $tablaxxx3 = 'vsi_nnaj_social';
    private $tablaxxx4 = 'vsi_nnaj_academica';
    private $tablaxxx5 = 'vsi_nnaj_comportamental';
    private $tablaxxx6 = 'vsi_nnaj_sexual';
    private $tablaxxx7 = 'vsi_nnaj_emocional';

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
            $table->bigInteger('sis_depen_id')->unsigned();
            $table->date('fecha');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx7}` comment 'P'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'P'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'P'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'P'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx7);
        Schema::dropIfExists($this->tablaxxx);
    }
}