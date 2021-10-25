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
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID NNAJ');
            $table->integer('sis_depen_id')->unsigned()->comment('CAMPO DE ID DEPENDENCIA');
            $table->date('d_fecha_diligencia')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('i_prm_tipo_atencion_id')->unsigned()->comment('CAMPO DE PARAMETRO TIPO DE ATENCION');
            $table->integer('i_prm_area_ajuste_id')->unsigned()->comment('CAMPO PARAMETRO AREA DE AJUSTE');
            $table->integer('i_prm_subarea_ajuste_id')->unsigned()->comment('CAMPO DE PARAMETRO SUBAREA DE AJUSTE');
            $table->string('s_tema')->comment('CAMPO DE TEMA');
            $table->string('s_objetivo_sesion')->comment('CAMPO OBJETIVO DE SESION');
            $table->string('s_desarrollo_sesion')->comment('CAMPO DESARROLLO DE SESION');
            $table->text('s_conclusiones_sesion')->comment('CAMPO CONCLUSIONES DE SESION');
            $table->string('s_tareas')->nullable()->comment('CAMPO TAREAS');
            $table->integer('i_prm_subarea_emocional_id')->nullable()->unsigned()->comment('CAMPO SUBAREA EMOCIONAL');
            $table->integer('i_prm_avance_emocional_id')->nullable()->unsigned()->comment('CAMPO AVANCE EMOCIONAL');
            $table->integer('i_prm_subarea_familiar_id')->nullable()->unsigned()->comment('CAMPO SUBAREA FAMILIAR');
            $table->integer('i_prm_avance_familiar_id')->nullable()->unsigned()->comment('CAMPO AVANCE FAMILIAR');
            $table->integer('i_prm_subarea_sexual_id')->nullable()->unsigned()->comment('CAMPO SUBAREA SEXUAL');
            $table->integer('i_prm_avance_sexual_id')->nullable()->unsigned()->comment('CAMPO AVANCE SEXUAL');
            $table->integer('i_prm_subarea_compor_id')->nullable()->unsigned()->comment('CAMPO SUBAREA COMPORTAMIENTO');
            $table->integer('i_prm_avance_compor_id')->nullable()->unsigned()->comment('CAMPO AVANCE COMPORTAMIENTO');
            $table->integer('i_prm_subarea_social_id')->nullable()->unsigned()->comment('CAMPO SUBAREA SOCIAL');
            $table->integer('i_prm_avance_social_id')->nullable()->unsigned()->comment('CAMPO AVANCE SOCIAL');
            $table->integer('i_prm_subarea_academ_id')->nullable()->unsigned()->comment('CAMPO SUBAREA ACADEMICA');
            $table->integer('i_prm_avance_academ_id')->nullable()->unsigned()->comment('CAMPO AVANCE ACADEMICA');
            $table->integer('i_prm_area_emocional_id')->nullable()->unsigned()->comment('CAMPO AREA EMOCIONAL');
            $table->integer('i_prm_area_sexual_id')->nullable()->unsigned()->comment('CAMPO AREA SEXUAL');
            $table->integer('i_prm_area_comportam_id')->nullable()->unsigned()->comment('CAMPO AREA COMPORTAMIENTO');
            $table->integer('i_prm_area_academica_id')->nullable()->unsigned()->comment('CAMPO AREA ACADEMICA');
            $table->integer('i_prm_area_social_id')->nullable()->unsigned()->comment('CAMPO AREA SOCIAL');
            $table->integer('i_prm_area_familiar_id')->nullable()->unsigned()->comment('CAMPO AREA FAMILIAR');
            $table->integer('i_prm_area_proxima_id')->unsigned()->nullable()->comment('CAMPO AREA PROXIMA A TRATAR');
            $table->string('s_observaciones')->nullable()->comment('CAMPO OBSERVACIONES');
            $table->date('d_fecha_proxima')->nullable()->comment('CAMPO FECHA PROXIMA INTERVENCION');
            $table->integer('i_primer_responsable')->unsigned()->comment('PRIMER RESPONSABLE');
            $table->integer('i_segundo_responsable')->nullable()->unsigned()->comment('SEGUNDO RESPONSABLE');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
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
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS DE UNA SESIÓN DE INTERVENCION, INTERVENCION SICOSOCIAL'");


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
