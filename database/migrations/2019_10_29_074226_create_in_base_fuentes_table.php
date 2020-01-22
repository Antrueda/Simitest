<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInBaseFuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_base_fuentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_fuente_id')->unsigned();
            $table->bigInteger('sis_documento_fuente_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('in_fuente_id')->references('id')->on('in_fuentes');
            $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');
            $table->unique(['in_fuente_id', 'sis_documento_fuente_id']);
            
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
        Schema::dropIfExists('in_base_fuentes');
    }
}
