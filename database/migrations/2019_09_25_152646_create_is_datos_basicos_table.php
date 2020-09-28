<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateIsDatosBasicosTable extends Migration
{
    private $tablaxxx = 'is_datos_basicos';
    
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
            $table->bigInteger('i_prm_area_proxima_id')->unsigned();
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
            $table->foreign('i_prm_area_proxima_id')->references('id')->on('parametros');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS DE UNA SESIÓN DE INTERVENCION, INTERVENCION SICOSOCIAL'");


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists($this->tablaxxx);
    }
}