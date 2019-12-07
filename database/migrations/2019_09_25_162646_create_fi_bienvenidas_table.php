<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiBienvenidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_bienvenidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_quiere_entrar_id')->unsigned();
            $table->bigInteger('sis_dependencia_id')->unsigned();
            $table->bigInteger('i_prm_servicio_id')->unsigned();
            $table->text('s_porque_quiere_entrar');
            $table->text('s_que_gustaria_hacer');
            $table->engine = 'InnoDB';
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_quiere_entrar_id')->references('id')->on('parametros');
            $table->foreign('sis_dependencia_id')->references('id')->on('sis_dependencias');
            $table->foreign('i_prm_servicio_id')->references('id')->on('parametros');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_bienvenidas');
    }
}
