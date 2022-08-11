<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVihIntras extends Migration
{
    private $tablaxxx = 'vih_intras';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vih_id')->unsigned()->comment('CAMPO ID DE VALORACION Y IDENTIFICACION HABILIDADES NNJA');
            $table->integer('prm_intrainsti')->unsigned()->comment('INTRAINSTITUCIONAL');
            $table->timestamps();

            $table->foreign('vih_id')->references('id')->on('vihs');
            $table->foreign('prm_intrainsti')->references('id')->on('parametros');
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
