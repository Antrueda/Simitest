<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDepenUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_depen_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sis_depen_id')->unsigned();
            $table->bigInteger('i_prm_responsable_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('i_prm_responsable_id')->references('id')->on('parametros');
            $table->unique(['user_id', 'sis_depen_id']);
            $table->timestamps();
        });
        Schema::create('h_sis_depen_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('sis_depen_id');
            $table->bigInteger('i_prm_responsable_id');
            $table->bigInteger('user_crea_id');
            $table->bigInteger('user_edita_id');
            $table->bigInteger('sis_esta_id');
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
        Schema::dropIfExists('h_sis_depen_user');
        Schema::dropIfExists('sis_depen_user');
    }
}
