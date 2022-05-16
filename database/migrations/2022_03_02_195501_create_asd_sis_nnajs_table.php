<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsdSisNnajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asd_sis_nnajs', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('asd_diaria_id')->unsigned()->comment('ASISTENCIA DIARIA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('asd_diaria_id')->references('id')->on('asd_diarias');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs')->onDelete('cascade');;
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_asd_sis_nnajs', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('asd_diaria_id')->unsigned()->comment('ASISTENCIA SEMANAL');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
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
        Schema::dropIfExists('asd_sis_nnajs');
        Schema::dropIfExists('h_asd_sis_nnajs');
    }
}
