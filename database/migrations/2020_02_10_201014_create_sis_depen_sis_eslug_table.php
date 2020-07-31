<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisDepenSisEslugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_depen_sis_eslug', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_eslug_id')->unsigned();
            $table->bigInteger('sis_depen_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('sis_eslug_id')->references('id')->on('sis_eslugs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->unique(['sis_depen_id','sis_eslug_id']);
            $table->timestamps();
        });
        Schema::create('h_sis_depen_sis_eslug', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sis_eslug_id');
            $table->integer('sis_depen_id');
            $table->Integer('user_crea_id'); 
            $table->integer('user_edita_id');
            $table->integer('sis_esta_id')->default(1);
          
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
        Schema::dropIfExists('h_sis_depen_sis_eslug');
        Schema::dropIfExists('sis_depen_sis_eslug');
    }
}
