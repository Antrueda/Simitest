<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAgSubtemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_ag_subtemas', function (Blueprint $table) {
            DB::unprepared('
            CREATE TRIGGER trigger_ag_subtemas_nuevo AFTER INSERT ON `ag_subtemas` FOR EACH ROW
            BEGIN
                INSERT INTO h_ag_subtemas (
                    `id`
                    ,`ag_taller_id`
                    ,`s_subtema`
                    ,`s_descripcion`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.ag_taller_id
                    ,NEW.s_subtema
                    ,NEW.s_descripcion
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.sis_esta_id
                    ,NOW()
                    ,NEW.updated_at
                );
            END
        ');
        DB::unprepared('
            CREATE TRIGGER trigger_ag_subtemas_edita AFTER UPDATE ON `ag_subtemas` FOR EACH ROW
            BEGIN
            INSERT INTO h_ag_subtemas (
                    `id`
                    ,`ag_taller_id`
                    ,`s_subtema`
                    ,`s_descripcion`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.ag_taller_id
                    ,NEW.s_subtema
                    ,NEW.s_descripcion
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
        DB::unprepared('DROP TRIGGER `trigger_ag_subtemas_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_subtemas_edita`');
    }
}
