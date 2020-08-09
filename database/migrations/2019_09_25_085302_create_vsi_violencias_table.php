<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVsiViolenciasTable extends Migration
{
    private $tablaxxx = 'vsi_violencias';
    private $tablaxxx2 = 'vsi_vio_contexto';
    private $tablaxxx3 = 'vsi_vio_tipo';
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
            $table->bigInteger('prm_tip_vio_id')->unsigned();
            $table->bigInteger('prm_fam_fis_id')->unsigned()->nullable();
            $table->bigInteger('prm_fam_psi_id')->unsigned()->nullable();
            $table->bigInteger('prm_fam_sex_id')->unsigned()->nullable();
            $table->bigInteger('prm_fam_eco_id')->unsigned()->nullable();
            $table->bigInteger('prm_amicol_fis_id')->unsigned()->nullable();
            $table->bigInteger('prm_amicol_psi_id')->unsigned()->nullable();
            $table->bigInteger('prm_amicol_sex_id')->unsigned()->nullable();
            $table->bigInteger('prm_amicol_eco_id')->unsigned()->nullable();
            $table->bigInteger('prm_par_fis_id')->unsigned()->nullable();
            $table->bigInteger('prm_par_psi_id')->unsigned()->nullable();
            $table->bigInteger('prm_par_sex_id')->unsigned()->nullable();
            $table->bigInteger('prm_par_eco_id')->unsigned()->nullable();
            $table->bigInteger('prm_compar_fis_id')->unsigned()->nullable();
            $table->bigInteger('prm_compar_psi_id')->unsigned()->nullable();
            $table->bigInteger('prm_compar_sex_id')->unsigned()->nullable();
            $table->bigInteger('prm_compar_eco_id')->unsigned()->nullable();
            $table->bigInteger('prm_ins_fis_id')->unsigned()->nullable();
            $table->bigInteger('prm_ins_psi_id')->unsigned()->nullable();
            $table->bigInteger('prm_ins_sex_id')->unsigned()->nullable();
            $table->bigInteger('prm_ins_eco_id')->unsigned()->nullable();
            $table->bigInteger('prm_lab_fis_id')->unsigned()->nullable();
            $table->bigInteger('prm_lab_psi_id')->unsigned()->nullable();
            $table->bigInteger('prm_lab_sex_id')->unsigned()->nullable();
            $table->bigInteger('prm_lab_eco_id')->unsigned()->nullable();
            $table->bigInteger('prm_dis_gen_id')->unsigned()->nullable();
            $table->bigInteger('prm_dis_ori_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_tip_vio_id')->references('id')->on('parametros');
            $table->foreign('prm_fam_fis_id')->references('id')->on('parametros');
            $table->foreign('prm_fam_psi_id')->references('id')->on('parametros');
            $table->foreign('prm_fam_sex_id')->references('id')->on('parametros');
            $table->foreign('prm_fam_eco_id')->references('id')->on('parametros');
            $table->foreign('prm_amicol_fis_id')->references('id')->on('parametros');
            $table->foreign('prm_amicol_psi_id')->references('id')->on('parametros');
            $table->foreign('prm_amicol_sex_id')->references('id')->on('parametros');
            $table->foreign('prm_amicol_eco_id')->references('id')->on('parametros');
            $table->foreign('prm_par_fis_id')->references('id')->on('parametros');
            $table->foreign('prm_par_psi_id')->references('id')->on('parametros');
            $table->foreign('prm_par_sex_id')->references('id')->on('parametros');
            $table->foreign('prm_par_eco_id')->references('id')->on('parametros');
            $table->foreign('prm_compar_fis_id')->references('id')->on('parametros');
            $table->foreign('prm_compar_psi_id')->references('id')->on('parametros');
            $table->foreign('prm_compar_sex_id')->references('id')->on('parametros');
            $table->foreign('prm_compar_eco_id')->references('id')->on('parametros');
            $table->foreign('prm_ins_fis_id')->references('id')->on('parametros');
            $table->foreign('prm_ins_psi_id')->references('id')->on('parametros');
            $table->foreign('prm_ins_sex_id')->references('id')->on('parametros');
            $table->foreign('prm_ins_eco_id')->references('id')->on('parametros');
            $table->foreign('prm_lab_fis_id')->references('id')->on('parametros');
            $table->foreign('prm_lab_psi_id')->references('id')->on('parametros');
            $table->foreign('prm_lab_sex_id')->references('id')->on('parametros');
            $table->foreign('prm_lab_eco_id')->references('id')->on('parametros');
            $table->foreign('prm_dis_gen_id')->references('id')->on('parametros');
            $table->foreign('prm_dis_ori_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");
        
        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_violencia_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_violencia_id')->references('id')->on('vsi_violencias');
            $table->unique(['parametro_id', 'vsi_violencia_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_violencia_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_violencia_id')->references('id')->on('vsi_violencias');
            $table->unique(['parametro_id', 'vsi_violencia_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");
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
        Schema::dropIfExists($this->tablaxxx);
    }
}