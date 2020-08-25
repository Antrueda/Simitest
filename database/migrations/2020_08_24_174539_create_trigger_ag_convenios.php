<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAgConvenios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_ag_convenios', function (Blueprint $table) {
            DB::unprepared('
            CREATE TRIGGER trigger_ag_convenios_nuevo AFTER INSERT ON `ag_convenios` FOR EACH ROW
            BEGIN
                INSERT INTO h_ag_convenios (
                    `id`
                    ,`s_convenio`
                    ,`i_prm_tconvenio_id`
                    ,`i_prm_entidad_id`
                    ,`s_descripcion`
                    ,`i_nconvenio`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`d_subscrip`
                    ,`d_terminac`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.s_convenio
                    ,NEW.i_prm_tconvenio_id
                    ,NEW.i_prm_entidad_id
                    ,NEW.s_descripcion
                    ,NEW.i_nconvenio
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.d_subscrip
                    ,NEW.d_terminac
                    ,NEW.sis_esta_id
                    ,NOW()
                    ,NEW.updated_at
                );
            END
        ');
            DB::unprepared('
            CREATE TRIGGER trigger_ag_convenios_edita AFTER UPDATE ON `ag_convenios` FOR EACH ROW
            BEGIN
            INSERT INTO h_ag_convenios (
                    `id`
                    ,`s_convenio`
                    ,`i_prm_tconvenio_id`
                    ,`i_prm_entidad_id`
                    ,`s_descripcion`
                    ,`i_nconvenio`
                    ,`user_crea_id`
                    ,`user_edita_id`
                    ,`d_subscrip`
                    ,`d_terminac`
                    ,`sis_esta_id`
                    ,`created_at`
                    ,`updated_at`
            )
            VALUES (
                    NEW.id
                    ,NEW.s_convenio
                    ,NEW.i_prm_tconvenio_id
                    ,NEW.i_prm_entidad_id
                    ,NEW.s_descripcion
                    ,NEW.i_nconvenio
                    ,NEW.user_crea_id
                    ,NEW.user_edita_id
                    ,NEW.d_subscrip
                    ,NEW.d_terminac
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
        DB::unprepared('DROP TRIGGER `trigger_ag_convenios_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_ag_convenios_edita`');
    }
}
