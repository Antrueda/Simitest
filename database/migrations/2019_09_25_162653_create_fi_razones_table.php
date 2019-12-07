<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiRazonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_razones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('s_porque_ingresar');//->comment('FI 17.1 RAZONES INGRESAR AL IDIPRON');
            $table->string('s_persona_diligencia');//->comment('FI 17.2.1 PERSONA QUE DILIGENCIA');
            $table->string('s_documento');//->comment('FI 17.2.2 DOCUMENTO DE IDENTIDAD PERSONA QUE DILIGENCIA');
            $table->string('s_cargo_contrato');//->comment('FI 17.2.3 CARGO O CONTRATO PERSONA QUE DILIGENCIA');
            $table->string('s_area_equipo');//->comment('FI 17.2.4 AREA O EQUIPO PERSONA QUE DILIGENCIA');
            $table->string('s_persona_responsable');//->comment('FI 17.2.1 NOMBRE PERSONA RESPONSABLE (VISTO BUENO)');
            $table->string('s_documento_responsable');//->comment('FI 17.2.2 DOCUMENTO DE IDENTIDAD RESPONSABLE (VISTO BUENO)');
            $table->string('s_cargo_contrato_reponsable');//->comment('FI 17.2.3 CARGO O CONTRATO PERSONA RESPONSABLE (VISTO BUENO)');
            $table->string('s_area_equipo_reponsable');//->comment('FI 17.2.4 AREA O EQUIPO PERSONA RESPONSABLE (VISTO BUENO)');`
            $table->bigInteger('i_prm_estado_ingreso_id')->unsigned();

            $table->bigInteger('sis_nnaj_id')->unsigned();//->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->bigInteger('user_crea_id')->unsigned();//->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned();//->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->boolean('activo');//->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_estado_ingreso_id')->references('id')->on('parametros');
            $table->engine = 'InnoDB';
        });

        Schema::create('fi_documentos_anexas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_razone_id')->unsigned()->comment('REGISTRO SALUD AL QUE SE LE ASIGNA EL EVENTO MEDICO');
            $table->bigInteger('i_prm_documento_anexa_id')->unsigned()->comment('F1 17.2 COPIA DE DOCUMENTOS QUE ANEXA');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->boolean('activo')->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_razone_id')->references('id')->on('fi_razones');
            $table->foreign('i_prm_documento_anexa_id')->references('id')->on('parametros');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_documentos_anexas');
        Schema::dropIfExists('fi_razones');
    }
}
