<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVctoAreaForts extends Migration
{
    private $tablaxxx = 'vcto_area_forts';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vcto_id')->unsigned()->comment('CAMPO ID DE VALORACION Y CARAC TO');
            $table->integer('prm_area')->unsigned()->comment('AREA A FORTALEZER');
            $table->timestamps();

            $table->foreign('vcto_id')->references('id')->on('vctos');
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
