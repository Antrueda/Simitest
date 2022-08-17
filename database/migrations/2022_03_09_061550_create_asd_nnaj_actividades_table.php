<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsdNnajActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asd_nnaj_actividades', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('asd_sis_nnajs_id')->unsigned()->nullable()->comment('NNAJS');
            $table->integer('asd_actividads_id')->unsigned()->nullable()->comment('ACTIVIDAD');
            $table->integer('prm_novedadx_id')->unsigned()->nullable()->comment('NOVEDAD U OBSERVACION');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();



            $table->foreign('asd_sis_nnajs_id')->references('id')->on('asd_sis_nnajs')->onDelete('cascade');
            $table->foreign('asd_actividads_id')->references('id')->on('asd_actividads')->onDelete('cascade');
            $table->foreign('prm_novedadx_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');

        });


        Schema::create('h_asd_nnaj_actividades', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('asd_diaria_id')->unsigned()->comment('ASISTENCIA SEMANAL');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->integer('prm_novedadx_id')->unsigned()->comment('NOVEDAD U OBSERVACION');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asd_nnaj_actividades');
        Schema::dropIfExists('h_asd_nnaj_actividades');

    }
}
