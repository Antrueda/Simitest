<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInFuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_fuentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_linea_base_id')->unsigned();
            $table->bigInteger('in_indicador_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('in_linea_base_id')->references('id')->on('in_linea_bases');
            $table->foreign('in_indicador_id')->references('id')->on('in_indicadors');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->unique(['in_indicador_id','in_linea_base_id']);
        });
        Schema::create('in_doc_indi_in_fuente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_fuente_id')->unsigned();
            $table->bigInteger('in_doc_indi_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->engine = 'InnoDB';
            $table->foreign('in_doc_indi_id')->references('id')->on('in_doc_indis');
            $table->foreign('in_fuente_id')->references('id')->on('in_fuentes');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->unique(['in_fuente_id','in_doc_indi_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('in_doc_indi_in_fuente');
        Schema::dropIfExists('in_fuentes');
    }
}
