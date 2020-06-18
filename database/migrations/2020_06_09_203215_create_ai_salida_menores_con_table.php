<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAiSalidaMenoresConTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai_salida_menores_con', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prm_id')->unsigned();
            $table->bigInteger('ai_salida_menores_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('prm_id')->references('id')->on('parametros');
            $table->foreign('ai_salida_menores_id')->references('id')->on('ai_salida_menores');
           // $table->unique(['id', 'prm_id', 'ai_salida_menores_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ai_salida_menores_con');
    }
}
