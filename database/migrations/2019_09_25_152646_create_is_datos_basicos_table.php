<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIsDatosBasicosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('is_datos_basicos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('sis_dependencia_id')->unsigned();
            $table->date('d_fecha_diligencia');
            $table->bigInteger('i_prm_tipo_atencion_id')->unsigned();
            $table->bigInteger('i_prm_area_ajuste_id')->unsigned();
            $table->bigInteger('i_prm_subarea_ajuste_id')->unsigned();
            $table->string('s_tema');
            $table->text('s_objetivo_sesion');
            $table->text('s_desarrollo_sesion');
            $table->text('s_conclusiones_sesion');
            $table->text('s_tareas')->nullable();
            $table->bigInteger('i_prm_subarea_emocional_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_avance_emocional_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_subarea_familiar_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_avance_familiar_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_subarea_sexual_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_avance_sexual_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_subarea_compor_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_avance_compor_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_subarea_social_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_avance_social_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_subarea_academ_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_avance_academ_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_area_emocional_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_area_sexual_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_area_comportam_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_area_academica_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_area_social_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_area_familiar_id')->nullable()->unsigned();
            $table->text('s_observaciones')->nullable();
            $table->date('d_fecha_proxima')->nullable();
            $table->bigInteger('i_primer_responsable')->unsigned();
            $table->bigInteger('i_segundo_responsable')->nullable()->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_tipo_atencion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_area_ajuste_id')->references('id')->on('parametros');
            $table->foreign('i_prm_subarea_ajuste_id')->references('id')->on('parametros');
            $table->foreign('i_prm_subarea_emocional_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_emocional_id')->references('id')->on('parametros');
            $table->foreign('i_prm_subarea_familiar_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_familiar_id')->references('id')->on('parametros');
            $table->foreign('i_prm_subarea_sexual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_sexual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_subarea_compor_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_compor_id')->references('id')->on('parametros');
            $table->foreign('i_prm_subarea_social_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_social_id')->references('id')->on('parametros');
            $table->foreign('i_prm_subarea_academ_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_academ_id')->references('id')->on('parametros');
            $table->foreign('i_prm_area_emocional_id')->references('id')->on('parametros');
            $table->foreign('i_prm_area_sexual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_area_comportam_id')->references('id')->on('parametros');
            $table->foreign('i_prm_area_academica_id')->references('id')->on('parametros');
            $table->foreign('i_prm_area_social_id')->references('id')->on('parametros');
            $table->foreign('i_prm_area_familiar_id')->references('id')->on('parametros');
            $table->foreign('sis_dependencia_id')->references('id')->on('sis_dependencias');
        });

        Schema::create('is_proxima_area_ajustes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('is_datos_basico_id')->unsigned();//->comment('REGISTRO INTERVENCIÓN AL QUE SE LE ASIGNA LA PRÓXIMA ÁREA DE AJUSTE');

            $table->bigIntegeR('i_prm_area_proxima_id')->unsigned();//->comment('ÁREA DE AJUSTE A TRABAJAR EN PRÓXIMA SESIÓN');
            
            $table->bigInteger('user_crea_id')->unsigned();//->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned();//->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');//->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('is_datos_basico_id')->references('id')->on('is_datos_basicos');
            $table->foreign('i_prm_area_proxima_id')->references('id')->on('parametros');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('is_proxima_area_ajustes');
        Schema::dropIfExists('is_datos_basicos');
    }
}