<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAgResponsables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_ag_responsables', function (Blueprint $table) {
            DB::unprepared('
            CREATE TRIGGER trigger_ag_responsables_nuevo AFTER INSERT ON `ag_responsables` FOR EACH ROW
            BEGIN
                INSERT INTO h_ag_responsables (
                    `id`
                    ,`i_prm_responsable_id`
                    ,`ag_actividad_id`
                    ,`sis_obse_id`
                    ,`user_id`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.i_prm_responsable_id
                    ,NEW.ag_actividad_id
                    ,NEW.sis_obse_id
                    ,NEW.user_id
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.sis_esta_id
                    ,NOW()
                    ,NEW.updated_at
                );
            END
        ');
            DB::unprepared('
            CREATE TRIGGER trigger_ag_responsables_edita AFTER UPDATE ON `ag_responsables` FOR EACH ROW
            BEGIN
            INSERT INTO h_ag_responsables (
                    `id`
                    ,`i_prm_responsable_id`
                    ,`ag_actividad_id`
                    ,`sis_obse_id`
                    ,`user_id`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.i_prm_responsable_id
                    ,NEW.ag_actividad_id
                    ,NEW.sis_obse_id
                    ,NEW.user_id
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.sis_esta_id
                    ,NOW()
                    ,NEW.updated_at
                );
            END
        ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `trigger_ag_responsables_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_responsables_edita`');
    }
}
