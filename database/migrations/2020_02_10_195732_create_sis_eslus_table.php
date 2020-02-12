<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisEslusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_eslugs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_espaluga')->comment('ESPACIO/LUGAR DONDE SE REALIZA LA ACTIVIDAD');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->unique(['s_espaluga']);
            $table->timestamps();
        });
        Schema::create('h_sis_eslugs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_espaluga')->comment('ESPACIO/LUGAR DONDE SE REALIZA LA ACTIVIDAD');
            $table->integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->integer('sis_esta_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_sis_eslugs');
        Schema::dropIfExists('sis_eslugs');
    }
}
