<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTriggerAgActividads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        DB::unprepared('
        CREATE TRIGGER trigger_ag_actividads_nuevo AFTER INSERT ON `ag_actividads` FOR EACH ROW
        BEGIN
            INSERT INTO h_ag_actividads (
                `id_old`
                ,`d_registro`
                ,`area_id`
                ,`sis_deporigen_id`
                ,`sis_depdestino_id`
                ,`ag_tema_id`
                ,`i_prm_lugar_id`
                ,`ag_taller_id`
                ,`ag_sttema_id`
                ,`i_prm_dirig_id`
                ,`s_prm_espac`
                ,`sis_entidad_id`
                ,`s_introduc`
                ,`s_justific`
                ,`s_objetivo`
                ,`s_metodolo`
                ,`s_categori`
                ,`s_contenid`
                ,`s_estrateg`
                ,`s_resultad`
                ,`s_evaluaci`
                ,`s_observac`
                ,`user_crea_id`
                ,`user_edita_id`
                ,`sis_esta_id`
                ,`metodoxx`
                ,`rutaxxxx`
                ,`ipxxxxxx`
                ,`created_at`
                ,`updated_at`
            )
            VALUES (
                NEW.id
                ,NEW.d_registro
                ,NEW.area_id
                ,NEW.sis_deporigen_id
                ,NEW.sis_depdestino_id
                ,NEW.ag_tema_id
                ,NEW.i_prm_lugar_id
                ,NEW.ag_taller_id
                ,NEW.ag_sttema_id
                ,NEW.i_prm_dirig_id
                ,NEW.s_prm_espac
                ,NEW.sis_entidad_id
                ,NEW.s_introduc
                ,NEW.s_justific
                ,NEW.s_objetivo
                ,NEW.s_metodolo
                ,NEW.s_categori
                ,NEW.s_contenid
                ,NEW.s_estrateg
                ,NEW.s_resultad
                ,NEW.s_evaluaci
                ,NEW.s_observac
                ,NEW.user_crea_id
                ,NEW.user_edita_id
                ,NEW.sis_esta_id
                ,`Create`
                ,`la ruta es por base de datos`
                ,`la ruta es por base de datos`
                ,NEW.created_at		
			    ,NEW.updated_at		
            );
        END
    ');
        DB::unprepared('
        CREATE TRIGGER trigger_ag_actividads_edita AFTER UPDATE ON `ag_actividads` FOR EACH ROW
        BEGIN
        INSERT INTO h_ag_actividads (
                `id_old`
                ,`d_registro`
                ,`area_id`
                ,`sis_deporigen_id`
                ,`sis_depdestino_id`
                ,`ag_tema_id`
                ,`i_prm_lugar_id`
                ,`ag_taller_id`
                ,`ag_sttema_id`
                ,`i_prm_dirig_id`
                ,`s_prm_espac`
                ,`sis_entidad_id`
                ,`s_introduc`
                ,`s_justific`
                ,`s_objetivo`
                ,`s_metodolo`
                ,`s_categori`
                ,`s_contenid`
                ,`s_estrateg`
                ,`s_resultad`
                ,`s_evaluaci`
                ,`s_observac`
                ,`user_crea_id`
                ,`user_edita_id`
                ,`sis_esta_id`
                ,`metodoxx`
                ,`rutaxxxx`
                ,`ipxxxxxx`
                ,`created_at`
                ,`updated_at`
        )
        VALUES (
                NEW.id
                ,NEW.d_registro
                ,NEW.area_id
                ,NEW.sis_deporigen_id
                ,NEW.sis_depdestino_id
                ,NEW.ag_tema_id
                ,NEW.i_prm_lugar_id
                ,NEW.ag_taller_id
                ,NEW.ag_sttema_id
                ,NEW.i_prm_dirig_id
                ,NEW.s_prm_espac
                ,NEW.sis_entidad_id
                ,NEW.s_introduc
                ,NEW.s_justific
                ,NEW.s_objetivo
                ,NEW.s_metodolo
                ,NEW.s_categori
                ,NEW.s_contenid
                ,NEW.s_estrateg
                ,NEW.s_resultad
                ,NEW.s_evaluaci
                ,NEW.s_observac
                ,NEW.user_crea_id
                ,NEW.user_edita_id
                ,NEW.sis_esta_id
                ,`Edit`
                ,`la ruta es por base de datos`
                ,`la ruta es por base de datos`
                ,NEW.created_at		
			    ,NEW.updated_at		
            );
        END
    ');
    */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `trigger_ag_actividads_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_actividads_edita`');
    }
}
