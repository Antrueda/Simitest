<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMitVmasTable extends Migration
{
    private $tablaxxx = 'mit_vmas';
    private $tablaxxx2 = 'mit_vma_ttos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->integer('prm_valoracion_id')->unsigned();
            $table->Integer('sesion');
            $table->integer('prm_probado_id')->unsigned();
            $table->integer('prm_sustancia_id')->unsigned()->nullable();
            $table->Integer('edad')->nullable();
            $table->integer('prm_calle_id')->unsigned();
            $table->integer('prm_ansiedad_id')->unsigned()->nullable();
            $table->integer('prm_mari_sino_id')->unsigned();
            $table->Integer('mari_edad')->nullable();
            $table->integer('prm_mari_frec_id')->unsigned()->nullable();
            $table->Integer('mari_dosis')->nullable();
            $table->Integer('mari_dia')->nullable();
            $table->Integer('mari_mes')->nullable();
            $table->Integer('mari_anio')->nullable();
            $table->Integer('mari_dejo')->nullable();
            $table->integer('prm_tabaco_sino_id')->unsigned();
            $table->Integer('tabaco_edad')->nullable();
            $table->integer('prm_tabaco_frec_id')->unsigned()->nullable();
            $table->Integer('tabaco_dosis')->nullable();
            $table->Integer('tabaco_dia')->nullable();
            $table->Integer('tabaco_mes')->nullable();
            $table->Integer('tabaco_anio')->nullable();
            $table->Integer('tabaco_dejo')->nullable();
            $table->integer('prm_alcohol_sino_id')->unsigned();
            $table->Integer('alcohol_edad')->nullable();
            $table->integer('prm_alcohol_frec_id')->unsigned()->nullable();
            $table->Integer('alcohol_dosis')->nullable();
            $table->Integer('alcohol_dia')->nullable();
            $table->Integer('alcohol_mes')->nullable();
            $table->Integer('alcohol_anio')->nullable();
            $table->Integer('alcohol_dejo')->nullable();
            $table->integer('prm_tran_sino_id')->unsigned();
            $table->Integer('tran_edad')->nullable();
            $table->integer('prm_tran_frec_id')->unsigned()->nullable();
            $table->Integer('tran_dosis')->nullable();
            $table->Integer('tran_dia')->nullable();
            $table->Integer('tran_mes')->nullable();
            $table->Integer('tran_anio')->nullable();
            $table->Integer('tran_dejo')->nullable();
            $table->integer('prm_pegante_sino_id')->unsigned();
            $table->Integer('pegante_edad')->nullable();
            $table->integer('prm_pegante_frec_id')->unsigned()->nullable();
            $table->Integer('pegante_dosis')->nullable();
            $table->Integer('pegante_dia')->nullable();
            $table->Integer('pegante_mes')->nullable();
            $table->Integer('pegante_anio')->nullable();
            $table->Integer('pegante_dejo')->nullable();
            $table->integer('prm_popper_sino_id')->unsigned();
            $table->Integer('popper_edad')->nullable();
            $table->integer('prm_popper_frec_id')->unsigned()->nullable();
            $table->Integer('popper_dosis')->nullable();
            $table->Integer('popper_dia')->nullable();
            $table->Integer('popper_mes')->nullable();
            $table->Integer('popper_anio')->nullable();
            $table->Integer('popper_dejo')->nullable();
            $table->integer('prm_dick_sino_id')->unsigned();
            $table->Integer('dick_edad')->nullable();
            $table->integer('prm_dick_frec_id')->unsigned()->nullable();
            $table->Integer('dick_dosis')->nullable();
            $table->Integer('dick_dia')->nullable();
            $table->Integer('dick_mes')->nullable();
            $table->Integer('dick_anio')->nullable();
            $table->Integer('dick_dejo')->nullable();
            $table->integer('prm_basuco_sino_id')->unsigned();
            $table->Integer('basuco_edad')->nullable();
            $table->integer('prm_basuco_frec_id')->unsigned()->nullable();
            $table->Integer('basuco_dosis')->nullable();
            $table->Integer('basuco_dia')->nullable();
            $table->Integer('basuco_mes')->nullable();
            $table->Integer('basuco_anio')->nullable();
            $table->Integer('basuco_dejo')->nullable();
            $table->integer('prm_cocaina_sino_id')->unsigned();
            $table->Integer('cocaina_edad')->nullable();
            $table->integer('prm_cocaina_frec_id')->unsigned()->nullable();
            $table->Integer('cocaina_dosis')->nullable();
            $table->Integer('cocaina_dia')->nullable();
            $table->Integer('cocaina_mes')->nullable();
            $table->Integer('cocaina_anio')->nullable();
            $table->Integer('cocaina_dejo')->nullable();
            $table->integer('prm_heroina_sino_id')->unsigned();
            $table->Integer('heroina_edad')->nullable();
            $table->integer('prm_heroina_frec_id')->unsigned()->nullable();
            $table->Integer('heroina_dosis')->nullable();
            $table->Integer('heroina_dia')->nullable();
            $table->Integer('heroina_mes')->nullable();
            $table->Integer('heroina_anio')->nullable();
            $table->Integer('heroina_dejo')->nullable();
            $table->integer('prm_doscb_sino_id')->unsigned();
            $table->Integer('doscb_edad')->nullable();
            $table->integer('prm_doscb_frec_id')->unsigned()->nullable();
            $table->Integer('doscb_dosis')->nullable();
            $table->Integer('doscb_dia')->nullable();
            $table->Integer('doscb_mes')->nullable();
            $table->Integer('doscb_anio')->nullable();
            $table->Integer('doscb_dejo')->nullable();
            $table->integer('prm_acidos_sino_id')->unsigned();
            $table->Integer('acidos_edad')->nullable();
            $table->integer('prm_acidos_frec_id')->unsigned()->nullable();
            $table->Integer('acidos_dosis')->nullable();
            $table->Integer('acidos_dia')->nullable();
            $table->Integer('acidos_mes')->nullable();
            $table->Integer('acidos_anio')->nullable();
            $table->Integer('acidos_dejo')->nullable();
            $table->integer('prm_lsd_sino_id')->unsigned();
            $table->Integer('lsd_edad')->nullable();
            $table->integer('prm_lsd_frec_id')->unsigned()->nullable();
            $table->Integer('lsd_dosis')->nullable();
            $table->Integer('lsd_dia')->nullable();
            $table->Integer('lsd_mes')->nullable();
            $table->Integer('lsd_anio')->nullable();
            $table->Integer('lsd_dejo')->nullable();
            $table->Integer('sustancias_consumidas');
            $table->integer('prm_recaida_id')->unsigned();
            $table->integer('prm_niv_ansiedad_id')->unsigned();
            $table->integer('prm_trastorno_id')->unsigned();
            $table->integer('prm_tTrastorno_id')->unsigned()->nullable();
            $table->integer('prm_apetito_id')->unsigned();
            $table->integer('prm_tapetito_id')->unsigned()->nullable();
            $table->integer('prm_sudoracion_id')->unsigned();
            $table->integer('prm_tsudoracion_id')->unsigned()->nullable();
            $table->integer('prm_animo_id')->unsigned();
            $table->integer('prm_tanimo_id')->unsigned()->nullable();
            $table->integer('prm_palpitaciones_id')->unsigned();
            $table->integer('prm_dolor_id')->unsigned();
            $table->string('patologicos');
            $table->string('quirurgicos');
            $table->string('familiares');
            $table->string('traumaticos');
            $table->string('gineco')->nullable();
            $table->integer('prm_tatuajes_id')->unsigned();
            $table->integer('prm_piercing_id')->unsigned();
            $table->integer('prm_dx_ppal_id')->unsigned();
            $table->integer('prm_dx_rel_uno_id')->unsigned()->nullable();
            $table->integer('prm_dx_rel_dos_id')->unsigned()->nullable();
            $table->integer('prm_dx_rel_tres_id')->unsigned()->nullable();
            $table->integer('prm_dx_rel_com_id')->unsigned()->nullable();
            $table->integer('prm_tipo_dx_id')->unsigned();
            $table->integer('prm_conducta_id')->unsigned();
            $table->string('alerta')->nullable();
            $table->string('observaciones');
            $table->integer('user_doc1_id')->unsigned();

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('parametros');
            $table->foreign('prm_valoracion_id')->references('id')->on('parametros');
            $table->foreign('prm_probado_id')->references('id')->on('parametros');
            $table->foreign('prm_sustancia_id')->references('id')->on('parametros');
            $table->foreign('prm_calle_id')->references('id')->on('parametros');
            $table->foreign('prm_ansiedad_id')->references('id')->on('parametros');
            $table->foreign('prm_mari_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_mari_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_tabaco_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_tabaco_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_alcohol_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_alcohol_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_tran_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_tran_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_pegante_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_pegante_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_popper_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_popper_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_dick_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_dick_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_basuco_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_basuco_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_cocaina_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_cocaina_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_heroina_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_heroina_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_doscb_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_doscb_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_acidos_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_acidos_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_lsd_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_lsd_frec_id')->references('id')->on('parametros');
            $table->foreign('prm_recaida_id')->references('id')->on('parametros');
            $table->foreign('prm_niv_ansiedad_id')->references('id')->on('parametros');
            $table->foreign('prm_trastorno_id')->references('id')->on('parametros');
            $table->foreign('prm_tTrastorno_id')->references('id')->on('parametros');
            $table->foreign('prm_apetito_id')->references('id')->on('parametros');
            $table->foreign('prm_tapetito_id')->references('id')->on('parametros');
            $table->foreign('prm_sudoracion_id')->references('id')->on('parametros');
            $table->foreign('prm_tsudoracion_id')->references('id')->on('parametros');
            $table->foreign('prm_animo_id')->references('id')->on('parametros');
            $table->foreign('prm_tanimo_id')->references('id')->on('parametros');
            $table->foreign('prm_palpitaciones_id')->references('id')->on('parametros');
            $table->foreign('prm_dolor_id')->references('id')->on('parametros');
            $table->foreign('prm_tatuajes_id')->references('id')->on('parametros');
            $table->foreign('prm_piercing_id')->references('id')->on('parametros');
            $table->foreign('prm_dx_ppal_id')->references('id')->on('sis_diagnosticos');
            $table->foreign('prm_dx_rel_uno_id')->references('id')->on('sis_diagnosticos');
            $table->foreign('prm_dx_rel_dos_id')->references('id')->on('sis_diagnosticos');
            $table->foreign('prm_dx_rel_tres_id')->references('id')->on('sis_diagnosticos');
            $table->foreign('prm_dx_rel_com_id')->references('id')->on('sis_diagnosticos');
            $table->foreign('prm_tipo_dx_id')->references('id')->on('parametros');
            $table->foreign('prm_conducta_id')->references('id')->on('parametros');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LAS ALUCINOGENAS CONSUMIDAS POR LA PERSONA ENTREVISTADA, MITIGACION'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->integer('parametro_id')->unsigned();
            $table->integer('mit_vma_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('mit_vma_id')->references('id')->on('mit_vmas');
            $table->unique(['parametro_id', 'mit_vma_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE DETALLES ASOCIADOS A LOS ALUCINOGENOS DE LA PERSONA ENTREVISTADA, MITIGACION'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
