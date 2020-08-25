<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAgContextos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('trigger_ag_contextos', function (Blueprint $table) {
        //     DB::unprepared('
        //     CREATE TRIGGER trigger_ag_contextos_nuevo AFTER INSERT ON `ag_contextos` FOR EACH ROW
        //     BEGIN
        //         INSERT INTO h_ag_contextos (
        //             `id`
        //             ,`s_contexto`
        //             ,`s_descripcion`
        //             ,`user_crea_id`
        //             ,`user_edita_id`
        //             ,`sis_esta_id`
        //             ,`created_at`
        //             ,`updated_at`
        //     )
        //     VALUES (
        //             NEW.id
        //             ,NEW.s_contexto
        //             ,NEW.s_descripcion
        //             ,NEW.user_crea_id
        //             ,NEW.user_edita_id
        //             ,NEW.sis_esta_id
        //             ,NOW()
        //             ,NEW.updated_at
        //         );
        //     END
        // ');
        // DB::unprepared('
        //     CREATE TRIGGER trigger_ag_contextos_edita AFTER UPDATE ON `ag_contextos` FOR EACH ROW
        //     BEGIN
        //     INSERT INTO h_ag_contextos (
        //             `id`
        //             ,`s_contexto`
        //             ,`s_descripcion`
        //             ,`user_crea_id`
        //             ,`user_edita_id`
        //             ,`sis_esta_id`
        //             ,`created_at`
        //             ,`updated_at`
        //     )
        //     VALUES (
        //             NEW.id
        //             ,NEW.s_contexto
        //             ,NEW.s_descripcion
        //             ,NEW.user_crea_id
        //             ,NEW.user_edita_id
        //             ,NEW.sis_esta_id
        //             ,NOW()
        //             ,NEW.updated_at
        //         );
        //     END
        // ');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `trigger_ag_contextos_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_contextos_edita`');
    }
}
