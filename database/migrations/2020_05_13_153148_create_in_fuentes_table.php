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
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('in_linea_base_id')->references('id')->on('in_linea_bases');
            $table->foreign('in_indicador_id')->references('id')->on('in_indicadors');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->unique(['in_indicador_id','in_linea_base_id']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_fuentes');
    }
}