<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('tipo_vacunas_id')->unsigned()->comment('TIPO DE VACUNAS');
            $table->string('nombre')->comment('HABILIDADES');
            $table->string('descripcion')->comment('DESCRIPCION');
            $table->integer('estusuarios_id')->unsigned()->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tipo_vacunas_id')->references('id')->on('tipo_vacunas');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');

        });


        Schema::create('h_vacunas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('tipo_vacunas_id')->unsigned()->comment('TIPO DE VACUNAS');
            $table->string('nombre')->comment('HABILIDADES');
            $table->string('descripcion')->comment('DESCRIPCION');
            $table->integer('estusuarios_id')->unsigned()->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
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
        Schema::dropIfExists('vacunas');
        Schema::dropIfExists('h_vacunas');

    }
}
