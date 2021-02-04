<?php

use App\CamposMagicos\CamposMagicos;
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
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');
            $table->bigInteger('prm_tip_vio_id')->unsigned()->comment('CAMPO DE PARAMETRO TIPO DE VIOLENCIA');
            $table->bigInteger('prm_fam_fis_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA FISICA FAMILIAR');
            $table->bigInteger('prm_fam_psi_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA PSICOLOGICA FAMILIAR');
            $table->bigInteger('prm_fam_sex_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA SEXUAL FAMILIAR');
            $table->bigInteger('prm_fam_eco_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA ECONOMICA FAMILIAR');
            $table->bigInteger('prm_amicol_fis_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA FISICA AMISTADES');
            $table->bigInteger('prm_amicol_psi_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA PSICOLOGICA AMISTADES');
            $table->bigInteger('prm_amicol_sex_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA SEXUAL AMISTADES');
            $table->bigInteger('prm_amicol_eco_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA ECONOMICA AMISTADES');
            $table->bigInteger('prm_par_fis_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA FISICA PAREJA');
            $table->bigInteger('prm_par_psi_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA PSICOLOGICA PAREJA');
            $table->bigInteger('prm_par_sex_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA SEXUAL PAREJA');
            $table->bigInteger('prm_par_eco_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA ECONOMICA PAREJA');
            $table->bigInteger('prm_compar_fis_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA FISICA COMUNITARIO'); 
            $table->bigInteger('prm_compar_psi_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA PSICOLOGICA COMUNITARIO');
            $table->bigInteger('prm_compar_sex_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA SEXUAL COMUNITARIO');
            $table->bigInteger('prm_compar_eco_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA ECONOMICA COMUNITARIO');
            $table->bigInteger('prm_ins_fis_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA FISICA INSTITUCIONAL'); 
            $table->bigInteger('prm_ins_psi_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA PSICOLOGICA INSTITUCIONAL'); 
            $table->bigInteger('prm_ins_sex_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA SEXUAL INSTITUCIONAL'); 
            $table->bigInteger('prm_ins_eco_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA ECONOMICA INSTITUCIONAL'); 
            $table->bigInteger('prm_lab_fis_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA FISICA LABORAL'); 
            $table->bigInteger('prm_lab_psi_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA PSICOLOGICA LABORAL'); 
            $table->bigInteger('prm_lab_sex_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA SEXUAL LABORAL'); 
            $table->bigInteger('prm_lab_eco_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO VIOLENCIA ECONOMICA LABORAL'); 
            $table->bigInteger('prm_dis_gen_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DISCRIMINACION GENERO');
            $table->bigInteger('prm_dis_ori_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DISCRIMINACION ORIENTACION');
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
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE DETALLES DE LA VIOLENCIA EXPERIMENTADA POR LA PERSONA ENTREVISTADA, SECCIÓN 4 VIOLENCIAS Y CONDICION ESPECIAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DEL CONTEXTO');
            $table->bigInteger('vsi_violencia_id')->unsigned()->comment('CAMPO DE ID VIOLENCIA');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_violencia_id')->references('id')->on('vsi_violencias');
            $table->unique(['parametro_id', 'vsi_violencia_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE CONTIENE EL LISTADO DEL CONTEXTO DE DISCRIMINACION DE LA PERSONA ENTREVISTADA, PREGUNTA 4.4 SECCIÓN 4 VIOLENCIAS Y CONDICION ESPECIAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DEL CONTEXTO');
            $table->bigInteger('vsi_violencia_id')->unsigned()->comment('CAMPO DE ID VIOLENCIA');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_violencia_id')->references('id')->on('vsi_violencias');
            $table->unique(['parametro_id', 'vsi_violencia_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DEL TIPO DE VIOLENCIA EXPERIMENTADA POR LA PERSONA ENTREVISTADA, PREGUNTA 4.5 SECCIÓN 4 VIOLENCIAS Y CONDICION ESPECIAL DE LA FICHA SICOSOCIAL'");
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
