<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiRedSocialsTable extends Migration
{
    private $tablaxxx = 'vsi_red_socials';
    private $tablaxxx2 = 'vsi_redsoc_motivo';
    private $tablaxxx3 = 'vsi_redsoc_acceso';
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
            $table->bigInteger('prm_presenta_id')->unsigned();
            $table->bigInteger('prm_protector_id')->unsigned()->nullable();
            $table->bigInteger('prm_dificultad_id')->unsigned();
            $table->bigInteger('prm_quien_id')->unsigned()->nullable();
            $table->bigInteger('prm_ruptura_genero_id')->unsigned();
            $table->bigInteger('prm_ruptura_sexual_id')->unsigned();
            $table->bigInteger('prm_acceso_id')->unsigned();
            $table->bigInteger('prm_servicio_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_presenta_id')->references('id')->on('parametros');
            $table->foreign('prm_protector_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('prm_quien_id')->references('id')->on('parametros');
            $table->foreign('prm_ruptura_genero_id')->references('id')->on('parametros');
            $table->foreign('prm_ruptura_sexual_id')->references('id')->on('parametros');
            $table->foreign('prm_acceso_id')->references('id')->on('parametros');
            $table->foreign('prm_servicio_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_redsocial_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_redsocial_id')->references('id')->on('vsi_red_socials');
            $table->unique(['parametro_id', 'vsi_redsocial_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_redsocial_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_redsocial_id')->references('id')->on('vsi_red_socials');
            $table->unique(['parametro_id', 'vsi_redsocial_id']);
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
