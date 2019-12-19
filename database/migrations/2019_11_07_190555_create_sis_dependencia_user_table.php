<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDependenciaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_dependencia_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sis_dependencia_id')->unsigned();
            //$table->bigInteger('i_prm_condicional_id')->unsigned();
            $table->unique(['user_id', 'sis_dependencia_id']);
            $table->engine = 'InnoDB';
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sis_dependencia_id')->references('id')->on('sis_dependencias');
            //$table->foreign('i_prm_condicional_id')->references('id')->on('parametros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_dependencia_user');
    }
}
