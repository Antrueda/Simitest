<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerUsers extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        DB::unprepared('
        CREATE TRIGGER trigger_users_nuevo AFTER INSERT ON `users` FOR EACH ROW
            BEGIN
                INSERT INTO h_users (`user_id`, `name`, `email`, `password`, `user_crea_id`, `created_at`
                , `s_primer_nombre`
                , `s_segundo_nombre`
                , `s_primer_apellido`
                , `s_segundo_apellido`
                , `s_observacion`
                , `s_telefono`
                , `s_matriculap`
                , `d_vinculacion`
                , `sis_cargo_id`
                , `d_finvinculacion`
                , `prm_tvinculacion_id`
                , `sis_municipio_id`
                , `prm_documento_id`
                , `i_prm_estado_id`
                 , `i_tiempo`
                )
                VALUES (NEW.id, NEW.name, NEW.email, NEW.password, NEW.user_crea_id, now()
                , NEW.s_primer_nombre
                , NEW.s_segundo_nombre
                , NEW.s_primer_apellido
                , NEW.s_segundo_apellido
                , NEW.s_observacion
                , NEW.s_telefono
                , NEW.s_matriculap
                , NEW.d_vinculacion
                , NEW.sis_cargo_id
                , NEW.d_finvinculacion
                , NEW.prm_tvinculacion_id
                , NEW.sis_municipio_id
                , NEW.prm_documento_id
                , NEW.i_prm_estado_id
               , NEW.i_tiempo
                );
            END
        ');
      
        DB::unprepared('
        CREATE TRIGGER trigger_users_edita AFTER UPDATE ON `users` FOR EACH ROW
            BEGIN
                INSERT INTO h_users (`user_id`, `name`, `email`, `password`, `user_crea_id`, `created_at`
                , `s_primer_nombre`
                , `s_segundo_nombre`
                , `s_primer_apellido`
                , `s_segundo_apellido`
                , `s_observacion`
                , `s_telefono`
                , `s_matriculap`
                , `d_vinculacion`
                , `sis_cargo_id`
                , `d_finvinculacion`
                , `prm_tvinculacion_id`
                , `sis_municipio_id`
                , `prm_documento_id`
                , `i_prm_estado_id`
                , `i_tiempo`
                )
                VALUES (NEW.id, NEW.name, NEW.email, NEW.password, NEW.user_crea_id, now()
                , NEW.s_primer_nombre
                , NEW.s_segundo_nombre
                , NEW.s_primer_apellido
                , NEW.s_segundo_apellido
                , NEW.s_observacion
                , NEW.s_telefono
                , NEW.s_matriculap
                , NEW.d_vinculacion
                , NEW.sis_cargo_id
                , NEW.d_finvinculacion
                , NEW.prm_tvinculacion_id
                , NEW.sis_municipio_id
                , NEW.prm_documento_id
                , NEW.i_prm_estado_id
                , NEW.i_tiempo
                );
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        DB::unprepared('DROP TRIGGER `trigger_users_nuevo`');
        DB::unprepared('DROP TRIGGER `trigger_users_edita`');
    }
}
