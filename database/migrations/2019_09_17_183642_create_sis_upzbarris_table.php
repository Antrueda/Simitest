<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisUpzbarrisTable extends Migration
{
    private $tablaxxx = 'sis_upzbarris';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_localupz_id')->unsigned();
            $table->bigInteger('sis_barrio_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_localupz_id')->references('id')->on('sis_localupzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->unique(['sis_barrio_id','sis_localupz_id']);
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
        Schema::dropIfExists($this->tablaxxx);
    }
}