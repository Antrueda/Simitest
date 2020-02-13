<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitVmasTable extends Migration{

    public function up(){
        Schema::create('mit_vmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->bigInteger('prm_valoracion_id')->unsigned();
            $table->Integer('sesion');
            $table->bigInteger('prm_probado_id')->unsigned();
            $table->bigInteger('prm_sustancia_id')->unsigned()->nullable();
            $table->Integer('edad')->nullable();
            $table->bigInteger('prm_calle_id')->unsigned();
            $table->bigInteger('prm_ansiedad_id')->unsigned()->nullable();
            $table->bigInteger('prm_mari_sino_id')->unsigned();
            $table->Integer('mari_edad')->nullable();
            $table->bigInteger('prm_mari_frec_id')->unsigned()->nullable();
            $table->Integer('mari_dosis')->nullable();
            $table->Integer('mari_dia')->nullable();
            $table->Integer('mari_mes')->nullable();
            $table->Integer('mari_anio')->nullable();
            $table->Integer('mari_dejo')->nullable();
            $table->bigInteger('prm_tabaco_sino_id')->unsigned();
            $table->Integer('tabaco_edad')->nullable();
            $table->bigInteger('prm_tabaco_frec_id')->unsigned()->nullable();
            $table->Integer('tabaco_dosis')->nullable();
            $table->Integer('tabaco_dia')->nullable();
            $table->Integer('tabaco_mes')->nullable();
            $table->Integer('tabaco_anio')->nullable();
            $table->Integer('tabaco_dejo')->nullable();
            $table->bigInteger('prm_alcohol_sino_id')->unsigned();
            $table->Integer('alcohol_edad')->nullable();
            $table->bigInteger('prm_alcohol_frec_id')->unsigned()->nullable();
            $table->Integer('alcohol_dosis')->nullable();
            $table->Integer('alcohol_dia')->nullable();
            $table->Integer('alcohol_mes')->nullable();
            $table->Integer('alcohol_anio')->nullable();
            $table->Integer('alcohol_dejo')->nullable();
            $table->bigInteger('prm_tran_sino_id')->unsigned();
            $table->Integer('tran_edad')->nullable();
            $table->bigInteger('prm_tran_frec_id')->unsigned()->nullable();
            $table->Integer('tran_dosis')->nullable();
            $table->Integer('tran_dia')->nullable();
            $table->Integer('tran_mes')->nullable();
            $table->Integer('tran_anio')->nullable();
            $table->Integer('tran_dejo')->nullable();
            $table->bigInteger('prm_pegante_sino_id')->unsigned();
            $table->Integer('pegante_edad')->nullable();
            $table->bigInteger('prm_pegante_frec_id')->unsigned()->nullable();
            $table->Integer('pegante_dosis')->nullable();
            $table->Integer('pegante_dia')->nullable();
            $table->Integer('pegante_mes')->nullable();
            $table->Integer('pegante_anio')->nullable();
            $table->Integer('pegante_dejo')->nullable();
            $table->bigInteger('prm_popper_sino_id')->unsigned();
            $table->Integer('popper_edad')->nullable();
            $table->bigInteger('prm_popper_frec_id')->unsigned()->nullable();
            $table->Integer('popper_dosis')->nullable();
            $table->Integer('popper_dia')->nullable();
            $table->Integer('popper_mes')->nullable();
            $table->Integer('popper_anio')->nullable();
            $table->Integer('popper_dejo')->nullable();
            $table->bigInteger('prm_dick_sino_id')->unsigned();
            $table->Integer('dick_edad')->nullable();
            $table->bigInteger('prm_dick_frec_id')->unsigned()->nullable();
            $table->Integer('dick_dosis')->nullable();
            $table->Integer('dick_dia')->nullable();
            $table->Integer('dick_mes')->nullable();
            $table->Integer('dick_anio')->nullable();
            $table->Integer('dick_dejo')->nullable();
            $table->bigInteger('prm_basuco_sino_id')->unsigned();
            $table->Integer('basuco_edad')->nullable();
            $table->bigInteger('prm_basuco_frec_id')->unsigned()->nullable();
            $table->Integer('basuco_dosis')->nullable();
            $table->Integer('basuco_dia')->nullable();
            $table->Integer('basuco_mes')->nullable();
            $table->Integer('basuco_anio')->nullable();
            $table->Integer('basuco_dejo')->nullable();
            $table->bigInteger('prm_cocaina_sino_id')->unsigned();
            $table->Integer('cocaina_edad')->nullable();
            $table->bigInteger('prm_cocaina_frec_id')->unsigned()->nullable();
            $table->Integer('cocaina_dosis')->nullable();
            $table->Integer('cocaina_dia')->nullable();
            $table->Integer('cocaina_mes')->nullable();
            $table->Integer('cocaina_anio')->nullable();
            $table->Integer('cocaina_dejo')->nullable();
            $table->bigInteger('prm_heroina_sino_id')->unsigned();
            $table->Integer('heroina_edad')->nullable();
            $table->bigInteger('prm_heroina_frec_id')->unsigned()->nullable();
            $table->Integer('heroina_dosis')->nullable();
            $table->Integer('heroina_dia')->nullable();
            $table->Integer('heroina_mes')->nullable();
            $table->Integer('heroina_anio')->nullable();
            $table->Integer('heroina_dejo')->nullable();
            $table->bigInteger('prm_2cb_sino_id')->unsigned();
            $table->Integer('2cb_edad')->nullable();
            $table->bigInteger('prm_2cb_frec_id')->unsigned()->nullable();
            $table->Integer('2cb_dosis')->nullable();
            $table->Integer('2cb_dia')->nullable();
            $table->Integer('2cb_mes')->nullable();
            $table->Integer('2cb_anio')->nullable();
            $table->Integer('2cb_dejo')->nullable();
            $table->bigInteger('prm_acidos_sino_id')->unsigned();
            $table->Integer('acidos_edad')->nullable();
            $table->bigInteger('prm_acidos_frec_id')->unsigned()->nullable();
            $table->Integer('acidos_dosis')->nullable();
            $table->Integer('acidos_dia')->nullable();
            $table->Integer('acidos_mes')->nullable();
            $table->Integer('acidos_anio')->nullable();
            $table->Integer('acidos_dejo')->nullable();
            $table->bigInteger('prm_lsd_sino_id')->unsigned();
            $table->Integer('lsd_edad')->nullable();
            $table->bigInteger('prm_lsd_frec_id')->unsigned()->nullable();
            $table->Integer('lsd_dosis')->nullable();
            $table->Integer('lsd_dia')->nullable();
            $table->Integer('lsd_mes')->nullable();
            $table->Integer('lsd_anio')->nullable();
            $table->Integer('lsd_dejo')->nullable();
            $table->Integer('sustancias_consumidas');
            $table->bigInteger('prm_recaida_id')->unsigned();
            $table->bigInteger('prm_niv_ansiedad_id')->unsigned();
            $table->bigInteger('prm_trastorno_id')->unsigned();
            $table->bigInteger('prm_tTrastorno_id')->unsigned()->nullable();
            $table->bigInteger('prm_apetito_id')->unsigned();
            $table->bigInteger('prm_tapetito_id')->unsigned()->nullable();
            $table->bigInteger('prm_sudoracion_id')->unsigned();
            $table->bigInteger('prm_tsudoracion_id')->unsigned()->nullable();
            $table->bigInteger('prm_animo_id')->unsigned();
            $table->bigInteger('prm_tanimo_id')->unsigned()->nullable();
            $table->bigInteger('prm_palpitaciones_id')->unsigned();
            $table->bigInteger('prm_dolor_id')->unsigned();
            $table->text('patologicos',4000);
            $table->text('quirurgicos',4000);
            $table->text('familiares',4000);
            $table->text('traumaticos',4000);
            $table->text('gineco',4000)->nullable();
            $table->bigInteger('prm_tatuajes_id')->unsigned();
            $table->bigInteger('prm_piercing_id')->unsigned();
            $table->bigInteger('prm_dx_ppal_id')->unsigned();
            $table->bigInteger('prm_dx_rel_uno_id')->unsigned()->nullable();
            $table->bigInteger('prm_dx_rel_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_dx_rel_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_dx_rel_com_id')->unsigned()->nullable();
            $table->bigInteger('prm_tipo_dx_id')->unsigned();
            $table->bigInteger('prm_conducta_id')->unsigned();
            $table->text('alerta',4000)->nullable();
            $table->text('observaciones',4000);
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
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
            $table->foreign('prm_2cb_sino_id')->references('id')->on('parametros');
            $table->foreign('prm_2cb_frec_id')->references('id')->on('parametros');
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
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            
        });

        Schema::create('mit_vma_ttos', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('mit_vma_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('mit_vma_id')->references('id')->on('mit_vmas');
            $table->unique(['parametro_id', 'mit_vma_id']);
            
        });
    }

    public function down(){
        Schema::dropIfExists('mit_vma_ttos');
        Schema::dropIfExists('mit_vmas');
    }
}
