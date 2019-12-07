<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiConsumoSpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_consumo_spas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_consume_spa_id')->unsigned();

            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_consume_spa_id')->references('id')->on('parametros');
            $table->engine = 'InnoDB';
        });

        Schema::create('fi_sustancia_consumidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_consumo_spa_id')->unsigned();//->comment('REGISTRO CONSUMO SPA AL QUE SE LE ASIGNA LA SUSTANCIA');

            $table->bigInteger('i_prm_sustancia_id')->nullable()->unsigned();
            $table->bigIntegeR('i_edad_uso')->nullable()->unsigned();
            $table->bigInteger('i_prm_consume_id')->nullable()->unsigned();
            
            $table->bigInteger('user_crea_id')->unsigned();//->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned();//->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->boolean('activo');//->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_sustancia_id')->references('id')->on('parametros');
            $table->foreign('fi_consumo_spa_id')->references('id')->on('fi_consumo_spas');
            $table->foreign('i_prm_consume_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('fi_sustancia_consumidas');
        Schema::dropIfExists('fi_consumo_spas');
    }
}