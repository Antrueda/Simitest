<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiViolenciasTable extends Migration
{
    private $tablaxxx = 'h_vsi_violencias';
    private $tablaxxx2 = 'h_vsi_vio_contexto';
    private $tablaxxx3 = 'h_vsi_vio_tipo';
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
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
        
        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_violencia_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_violencia_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_violencia_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_violencia_id']);
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
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx);
    }
}