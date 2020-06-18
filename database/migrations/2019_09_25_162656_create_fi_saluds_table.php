<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_saluds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('regisalu_id')->unsigned()->comment('FI 6.1 REGIMEN SALUD');
            $table->bigInteger('sis_entidad_salud_id')->unsigned()->comment('FI 6.2 ENTIDAD  / REGIMEN'); // OTRA TABLA
            $table->bigInteger('tiensalu_id')->nullable()->unsigned()->comment('FI 6.3.1 TIENE SISBEN');
            $table->decimal('d_puntaje_sisben', 19, 2)->nullable()->comment('FI 6.3.2 PUNTAJE SISBEN');
            $table->bigInteger('tiendisc_id')->unsigned()->comment('FI 6.4.1 TIENE DISCAPACIDAD');
            $table->bigInteger('tipodisc_id')->unsigned()->comment('FI 6.4.2 TIPO DISCAPACIDAD');
            $table->bigIntegeR('ticedisc_id')->unsigned()->comment('FI 6.5 TIENE CERTIFICADO DISCAPACIDAD');
            $table->bigIntegeR('dipeinde_id')->unsigned()->comment('FI 6.6 DISCAPACIDAD PERMITE INDEPENDENCIA');
            $table->bigIntegeR('estagest_id')->unsigned()->comment('FI 6.7 SE ENCUENTRA EN ESTADO GESTACIÓN');
            $table->bigIntegeR('i_numero_semanas')->nullable()->comment('FI 6.8 NÚMERO DE SEMANAS');
            $table->bigIntegeR('estalact_id')->unsigned()->comment('FI 6.9 SE ENCUENTRA LACTANDO');
            $table->bigIntegeR('i_numero_meses')->nullable()->comment('FI 6.10 NÚMERO DE MESES');
            $table->bigIntegeR('probsalu_id')->unsigned()->comment('FI 6.11 TIENE PROBLEMAS DE SALUD');
            $table->bigIntegeR('i_prm_problema_salud_id')->unsigned()->comment('FI 6.11.1 CUAL PROBLEMA SALUD');
            $table->bigIntegeR('consmedi_id')->unsigned()->comment('FI 6.12 CONSUME MEDICAMENTOS DE FORMA PERMANENTE');
            $table->string('s_cual_medicamento')->nullable()->comment('FI 6.12.1 CUAL MEDICAMENTO');
            $table->bigIntegeR('tienhijo_id')->unsigned()->comment('FI 6.13 TIENE HIJOS');
            $table->bigIntegeR('i_numero_hijos')->nullable()->comment('FI 6.14 NÚMERO DE HIJOS');
            $table->bigIntegeR('conometo_id')->unsigned()->comment('FI 6.16 CONOCE METODOS ANTICONCEPTIVOS');
            $table->bigIntegeR('usametod_id')->unsigned()->comment('FI 6.17 USA METODOS ANTICONCEPTIVOS');
            $table->bigIntegeR('cualmeto_id')->unsigned()->comment('FI 6.18 CUAL METODO UTILIZA');
            $table->bigIntegeR('usovolun_id')->unsigned()->comment('FI 6.19 LO USA VOLUNTARIAMENTE');
            $table->bigIntegeR('i_comidas_diarias')->comment('FI 6.24 COMIDAS CONSUME AL DIA');
            $table->bigIntegeR('racicomi_id')->unsigned()->comment('FI 6.25 RAZON NO CONSUME 5 COMIDAS AL DIA');

            $table->bigInteger('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA SALUD');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1)->comment('ESTADO DEL REGISTRO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('regisalu_id')->references('id')->on('parametros');//regisalu_id
            $table->foreign('tiensalu_id')->references('id')->on('parametros');//tiensalu_id
            $table->foreign('tiendisc_id')->references('id')->on('parametros');
            $table->foreign('tipodisc_id')->references('id')->on('parametros');
            $table->foreign('ticedisc_id')->references('id')->on('parametros');
            $table->foreign('dipeinde_id')->references('id')->on('parametros');
            $table->foreign('estagest_id')->references('id')->on('parametros');
            $table->foreign('estalact_id')->references('id')->on('parametros');
            $table->foreign('probsalu_id')->references('id')->on('parametros');
            $table->foreign('consmedi_id')->references('id')->on('parametros');
            $table->foreign('tienhijo_id')->references('id')->on('parametros');
            $table->foreign('conometo_id')->references('id')->on('parametros');
            $table->foreign('usametod_id')->references('id')->on('parametros');
            $table->foreign('cualmeto_id')->references('id')->on('parametros');
            $table->foreign('usovolun_id')->references('id')->on('parametros');
            $table->foreign('racicomi_id')->references('id')->on('parametros');
            $table->foreign('sis_entidad_salud_id')->references('id')->on('sis_entidad_saluds');
        });

        Schema::create('fi_enfermedades_familias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_salud_id')->unsigned()->comment('REGISTRO SALUD AL QUE SE LE ASIGNA LA ENFERMEDAD FAMILIA');

            $table->bigIntegeR('fi_composicion_fami_id')->unsigned()->comment('FI 6.17 MIEMBRO FAMILIA');
            $table->string('s_tipo_enfermedad')->comment('FI TIPO ENFERMEDAD');
            $table->bigIntegeR('recimedi_id')->unsigned()->comment('FI RECIBE MEDICAMENTOS');
            $table->string('s_medicamento')->comment('FI CUAL MEDICAMENTO');
            $table->bigIntegeR('rectrata_id')->unsigned()->comment('FI HA RECIBIDO TRATAMIENTO');

            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas')->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_salud_id')->references('id')->on('fi_saluds');
            $table->foreign('fi_composicion_fami_id')->references('id')->on('fi_composicion_famis');
            $table->foreign('recimedi_id')->references('id')->on('parametros');
            $table->foreign('rectrata_id')->references('id')->on('parametros');
        });

        Schema::create('fi_eventos_medicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_salud_id')->unsigned(); //->comment('REGISTRO SALUD AL QUE SE LE ASIGNA EL EVENTO MEDICO');
            $table->bigIntegeR('evenmedi_id')->unsigned(); //->comment('FI 6.15 EVENTOS MÉDICOS');
            $table->bigInteger('user_crea_id')->unsigned(); //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned(); //->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas'); //->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_salud_id')->references('id')->on('fi_saluds');
            $table->foreign('evenmedi_id')->references('id')->on('parametros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_eventos_medicos');
        Schema::dropIfExists('fi_enfermedades_familias');
        Schema::dropIfExists('fi_saluds');
    }
}
