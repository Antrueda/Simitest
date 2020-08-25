<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAgRecursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_ag_recursos', function (Blueprint $table) {
            DB::unprepared('
            CREATE TRIGGER trigger_ag_recursos_nuevo AFTER INSERT ON `ag_recursos` FOR EACH ROW
            BEGIN
                INSERT INTO h_ag_recursos (
                    `id`
                    ,`s_recurso`
                    ,`i_prm_trecurso_id`
                    ,`i_prm_umedida_id`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.s_recurso
                    ,NEW.i_prm_trecurso_id
                    ,NEW.i_prm_umedida_id
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.sis_esta_id
                    ,NOW()
                    ,NEW.updated_at
                );
            END
        ');
        DB::unprepared('
            CREATE TRIGGER trigger_ag_recursos_edita AFTER UPDATE ON `ag_recursos` FOR EACH ROW
            BEGIN
            INSERT INTO h_ag_recursos (
                    `id`
                    ,`s_recurso`
                    ,`i_prm_trecurso_id`
                    ,`i_prm_umedida_id`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.s_recurso
                    ,NEW.i_prm_trecurso_id
                    ,NEW.i_prm_umedida_id
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
        DB::unprepared('DROP TRIGGER `trigger_ag_recursos_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_recursos_edita`');
    }
}
