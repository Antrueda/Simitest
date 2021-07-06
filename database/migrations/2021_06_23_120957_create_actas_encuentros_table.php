<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActasEncuentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas_encuentros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sis_depen_id');
            $table->unsignedBigInteger('sis_servicio_id');
            $table->unsignedBigInteger('sis_localidad_id');
            $table->unsignedBigInteger('sis_upz_id');
            $table->unsignedBigInteger('sis_barrio_id');
            $table->unsignedBigInteger('accion_parametro_id');
            $table->unsignedBigInteger('actividad_parametro_id');
            $table->string('objetivo', 100);
            $table->text('desarrollo_actividad', 4000);
            $table->text('metodologia', 4000);
            $table->text('observaciones', 4000);
            $table->unsignedBigInteger('user_crea');
            $table->unsignedBigInteger('user_edita');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('accion_parametro_id')->references('id')->on('parametros');
            $table->foreign('actividad_parametro_id')->references('id')->on('parametros');
            $table->foreign('user_crea')->references('id')->on('users');
            $table->foreign('user_edita')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actas_encuentros');
    }
}
