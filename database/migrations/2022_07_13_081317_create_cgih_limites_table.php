<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgihLimitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgih_limites', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('limite')->nullable()->unsigned()->comment('LIMITE SELECTORES');
            $table->text('descripcion')->comment('DESCRIPCION DEL TIPO DE ACTIVIDAD');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DEL TIPO DE ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
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
        Schema::dropIfExists('cgih_limites');
    }
}


