<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVnutIntrasTable extends Migration
{
    private $tablaxxx = 'vnut_intras';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vnutricion_id')->unsigned()->comment('CAMPO ID DE VALORACION NUTRICIONAL');
            $table->integer('prm_area')->unsigned()->comment('AREA A FORTALEZER');
            $table->timestamps();

            $table->foreign('vnutricion_id')->references('id')->on('vnutricions');
            $table->foreign('prm_area')->references('id')->on('parametros');
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
