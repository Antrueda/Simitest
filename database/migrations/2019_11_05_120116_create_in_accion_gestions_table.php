<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInAccionGestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_accion_gestions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_actividad_id')->unsigned();
            $table->bigInteger('i_prm_ttiempo_id')->unsigned();
            $table->bigInteger('in_lineabase_nnaj_id')->unsigned();
            $table->bigInteger('sis_documento_fuente_id')->unsigned(); //cambiar por in_linea_fuente en un futuro
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->integer('i_tiempo');
            $table->decimal('i_porcentaje', 5, 2);
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('in_lineabase_nnaj_id')->references('id')->on('in_lineabase_nnajs');
            $table->foreign('sis_actividad_id')->references('id')->on('sis_actividads');
            $table->foreign('i_prm_ttiempo_id')->references('id')->on('parametros');
            $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('in_actsoportes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_accion_gestion_id')->unsigned();
            $table->bigInteger('sis_fsoporte_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('in_accion_gestion_id')->references('id')->on('in_accion_gestions');
            $table->foreign('sis_fsoporte_id')->references('id')->on('sis_fsoportes');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->unique(['in_accion_gestion_id','sis_fsoporte_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_actsoportes');
        Schema::dropIfExists('in_accion_gestions');
    }
}
