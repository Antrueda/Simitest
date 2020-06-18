<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitVspaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mit_vspa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_upi_id')->unsigned()->nullable();
            $table->date('fecha');
            $table->bigInteger('prm_valoracion_id')->unsigned()->nullable();
            $table->bigInteger('prm_icbf_id')->unsigned()->nullable();
            $table->Integer('previos')->nullable();
            $table->bigInteger('prm_gestante_id')->unsigned()->nullable();
            $table->Integer('semanas_gestacion')->nullable();
            $table->bigInteger('prm_escolar_id')->unsigned()->nullable();
            $table->bigInteger('prm_ingresos_id')->unsigned()->nullable();
            $table->bigInteger('prm_modalidad_id')->unsigned()->nullable();
            $table->bigInteger('prm_acude_id')->unsigned()->nullable();
            $table->bigInteger('prm_sitio_id')->unsigned()->nullable();
            $table->bigInteger('prm_probado_id')->unsigned()->nullable();
            $table->bigInteger('prm_cantidad_id')->unsigned()->nullable();
            $table->bigInteger('prm_inyectadas_id')->unsigned()->nullable();
            $table->Integer('edad')->nullable();
            $table->bigInteger('prm_dificultad_id')->unsigned()->nullable();
            $table->text('descripcion',4000)->nullable();
            $table->bigInteger('prm_obtiene_id')->unsigned()->nullable();
            $table->string('donde',120)->nullable();
            $table->Integer('precio')->nullable();
            $table->Integer('cantidad')->nullable();
            $table->bigInteger('prm_medida_id')->unsigned()->nullable();
            $table->bigInteger('prm_frecuencia_id')->unsigned()->nullable();
            $table->bigInteger('prm_costumbre_id')->unsigned()->nullable();
            $table->text('porque',4000)->nullable();
            $table->string('sustancia',120)->nullable();
            $table->bigInteger('prm_comparte_id')->unsigned()->nullable();
            $table->text('porque_comparte',4000)->nullable();
            $table->bigInteger('prm_prueba_id')->unsigned()->nullable();
            $table->text('porque_prueba',4000)->nullable();
            $table->text('observaciones',4000)->nullable();
            $table->text('obs_generales',4000);
            $table->text('obs_generales_dos',4000);
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();


            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('parametros');
            $table->foreign('prm_valoracion_id')->references('id')->on('parametros');
            $table->foreign('prm_icbf_id')->references('id')->on('parametros');
            $table->foreign('prm_gestante_id')->references('id')->on('parametros');
            $table->foreign('prm_escolar_id')->references('id')->on('parametros');
            $table->foreign('prm_ingresos_id')->references('id')->on('parametros');
            $table->foreign('prm_modalidad_id')->references('id')->on('parametros');
            $table->foreign('prm_acude_id')->references('id')->on('parametros');
            $table->foreign('prm_sitio_id')->references('id')->on('parametros');
            $table->foreign('prm_probado_id')->references('id')->on('parametros');
            $table->foreign('prm_cantidad_id')->references('id')->on('parametros');
            $table->foreign('prm_inyectadas_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('prm_obtiene_id')->references('id')->on('parametros');
            $table->foreign('prm_medida_id')->references('id')->on('parametros');
            $table->foreign('prm_frecuencia_id')->references('id')->on('parametros');
            $table->foreign('prm_costumbre_id')->references('id')->on('parametros');
            $table->foreign('prm_comparte_id')->references('id')->on('parametros');
            $table->foreign('prm_prueba_id')->references('id')->on('parametros');

            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('mit_vspa');
    }
}
