<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAgTallers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_ag_tallers', function (Blueprint $table) {
            DB::unprepared('
            CREATE TRIGGER trigger_ag_tallers_nuevo AFTER INSERT ON `ag_tallers` FOR EACH ROW
            BEGIN
                INSERT INTO h_ag_tallers (
                    `id`
                    ,`s_taller`
                    ,`s_descripcion`
                    ,`ag_tema_id`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.s_taller
                    ,NEW.s_descripcion
                    ,NEW.ag_tema_id
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.sis_esta_id
                    ,NOW()
                    ,NEW.updated_at
                );
            END
        ');
        DB::unprepared('
            CREATE TRIGGER trigger_ag_tallers_edita AFTER UPDATE ON `ag_tallers` FOR EACH ROW
            BEGIN
            INSERT INTO h_ag_tallers (
                    `id`
                    ,`s_taller`
                    ,`s_descripcion`
                    ,`ag_tema_id`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.s_taller
                    ,NEW.s_descripcion
                    ,NEW.ag_tema_id
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
        DB::unprepared('DROP TRIGGER `trigger_ag_tallers_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_tallers_edita`');
    }
}
