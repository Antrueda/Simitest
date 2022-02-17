<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsisdiarSisNnajTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asisdiar_sis_nnaj', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('asisdiar_id')->unsigned()->comment('ASISTENCIA SEMANAL');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('asisdiar_id')->references('id')->on('asisdiars');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_asisdiar_sis_nnaj', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('asisdiar_id')->unsigned()->comment('ASISTENCIA SEMANAL');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('asisdiar_id')->references('id')->on('asisdiars');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
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
        Schema::dropIfExists('asisdiar_sis_nnaj');
        Schema::dropIfExists('h_asisdiar_sis_nnaj');
    }
}
