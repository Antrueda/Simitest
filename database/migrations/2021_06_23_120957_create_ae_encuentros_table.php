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
            $table->timestamp('fechdili')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->unsignedBigInteger('sis_depen_id')->comment('ID DE LA UPI');
            $table->unsignedBigInteger('sis_servicio_id')->comment('ID DEL SERVICIO');
            $table->unsignedBigInteger('sis_localidad_id')->comment('ID DE LA LOCALIDAD');
            $table->unsignedBigInteger('sis_upz_id')->comment('ID DE LA UPZ');
            $table->unsignedBigInteger('sis_barrio_id')->comment('ID DEL BARRIO');
            $table->unsignedBigInteger('prm_accion_id')->comment('ID DEL PARAMETRO DE LA ACCION');
            $table->unsignedBigInteger('prm_actividad_id')->comment('ID DEL PARAMETRO DE LA ACTIVIDAD');
            $table->string('objetivo', 100);
            $table->text('desarrollo_actividad', 4000);
            $table->text('metodologia', 4000);
            $table->text('observaciones', 4000);
            $table->unsignedBigInteger('funcionario_contratista_diligencia_id')->comment('ID DEL USUARIO QUE DILIGENCIA');
            $table->unsignedBigInteger('funcionario_contratista_id')->comment('ID DE USUARIO QUE REVISA EL DILIGENCIAMIENTO');
            $table->unsignedBigInteger('responsable_upi_id')->comment('ID DEL USUARIO RESPONSABLE DE LA UPI, QUIEN APRUEBA');
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            // $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            // $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            // $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            // $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            // $table->foreign('prm_accion_id')->references('id')->on('parametros');
            // $table->foreign('prm_actividad_id')->references('id')->on('parametros');
            // $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            // $table->foreign('user_crea_id')->references('id')->on('users');
            // $table->foreign('user_edita_id')->references('id')->on('users');
            // $table->foreign('funcionario_contratista_id')->references('id')->on('users');
            // $table->foreign('funcionario_contratista_diligencia_id')->references('id')->on('users');
            // $table->foreign('responsable_upi_id')->references('id')->on('users');
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
