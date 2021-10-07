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
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_depen_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('sis_servicio_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('sis_localidad_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('sis_upz_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('sis_barrio_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('prm_accion_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('prm_actividad_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->string('objetivo', 100);
            $table->date('fechdili')->comment('FECHA DE DILIGENCIAMIENTO DEL ACTA DE ENCUENTRO');
            $table->string('desarrollo_actividad', 4000);
            $table->string('metodologia', 4000);
            $table->string('observaciones', 4000);
            $table->integer('user_contdili_id')->unsigned()->comment('ID DEL USUARIO QUE DILIGENCIA');
            $table->integer('user_funcontr_id')->unsigned()->comment('ID DE USUARIO QUE REVISA EL DILIGENCIAMIENTO');
            $table->integer('respoupi_id')->unsigned()->comment('ID DEL USUARIO RESPONSABLE DE LA UPI, QUIEN APRUEBA');
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('prm_accion_id')->references('id')->on('parametros');
            $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('user_funcontr_id')->references('id')->on('users');
            $table->foreign('user_contdili_id')->references('id')->on('users');
            $table->foreign('respoupi_id')->references('id')->on('users');
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
