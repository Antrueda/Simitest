<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAgRelacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_ag_relacions', function (Blueprint $table) {
            DB::unprepared('
            CREATE TRIGGER trigger_ag_relacions_nuevo AFTER INSERT ON `ag_relacions` FOR EACH ROW
            BEGIN
                INSERT INTO h_ag_relacions (
                    `id`
                    ,`ag_actividad_id`
                    ,`ag_recurso_id`
                    ,`i_cantidad`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.ag_actividad_id
                    ,NEW.ag_recurso_id
                    ,NEW.i_cantidad
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.sis_esta_id
                    ,NOW()
                    ,NEW.updated_at
                );
            END
        ');
        DB::unprepared('
            CREATE TRIGGER trigger_ag_relacions_edita AFTER UPDATE ON `ag_relacions` FOR EACH ROW
            BEGIN
            INSERT INTO h_ag_relacions (
                    `id`
                    ,`ag_actividad_id`
                    ,`ag_recurso_id`
                    ,`i_cantidad`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.ag_actividad_id
                    ,NEW.ag_recurso_id
                    ,NEW.i_cantidad
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
        DB::unprepared('DROP TRIGGER `trigger_ag_relacions_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_relacions_edita`');
    }
}
