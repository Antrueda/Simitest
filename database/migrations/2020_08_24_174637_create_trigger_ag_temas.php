<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAgTemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_ag_temas', function (Blueprint $table) {
            DB::unprepared('
            CREATE TRIGGER trigger_ag_temas_nuevo AFTER INSERT ON `ag_temas` FOR EACH ROW
            BEGIN
                INSERT INTO h_ag_temas (
                    `id_old`
                    ,`s_tema`
                    ,`area_id`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`s_descripcion`
                    ,`metodoxx`
                    ,`rutaxxxx`
                    ,`ipxxxxxx`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.s_tema
                    ,NEW.area_id
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.sis_esta_id
                    ,NEW.s_descripcion
                    ,`Create`
                    ,`la ruta es por base de datos`
                    ,`la ruta es por base de datos`
                    ,NEW.created_at		
                    ,NEW.updated_at
                );
            END
        ');
        DB::unprepared('
            CREATE TRIGGER trigger_ag_temas_edita AFTER UPDATE ON `ag_temas` FOR EACH ROW
            BEGIN
            INSERT INTO h_ag_temas (
                    `id_old`
                    ,`s_tema`
                    ,`area_id`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`sis_esta_id`
                    ,`s_descripcion`
                    ,`metodoxx`
                    ,`rutaxxxx`
                    ,`ipxxxxxx`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.s_tema
                    ,NEW.area_id
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.sis_esta_id
                    ,NEW.s_descripcion
                    ,`Edit`
                    ,`la ruta es por base de datos`
                    ,`la ruta es por base de datos`
                    ,NEW.created_at		
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
        DB::unprepared('DROP TRIGGER `trigger_ag_temas_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_temas_edita`');
    }
}
