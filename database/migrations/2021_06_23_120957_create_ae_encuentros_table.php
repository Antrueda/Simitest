<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeEncuentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ae_encuentros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sis_depen_id');
            $table->unsignedBigInteger('sis_servicio_id');
            $table->unsignedBigInteger('sis_localidad_id');
            $table->unsignedBigInteger('sis_upz_id');
            $table->unsignedBigInteger('sis_barrio_id');
            $table->unsignedBigInteger('prm_accion_id');
            $table->unsignedBigInteger('prm_actividad_id');
            $table->string('objetivo', 100);
            $table->text('desarrollo_actividad', 4000);
            $table->text('metodologia', 4000);
            $table->text('observaciones', 4000);
            $table->unsignedBigInteger('sis_esta_id');
            $table->unsignedBigInteger('user_crea_id');
            $table->unsignedBigInteger('user_edita_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sis_depen_id')->constrained();
            // $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('prm_accion_id')->references('id')->on('parametros');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ae_encuentros');
    }
}
