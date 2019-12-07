<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInDocIndicadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_doc_indis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_indicador_id')->unsigned();
            $table->bigInteger('sis_documento_fuente_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('in_indicador_id')->references('id')->on('in_indicadors');
            $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->unique(['sis_documento_fuente_id','in_indicador_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_doc_indis');
    }
}
