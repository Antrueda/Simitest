<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVctoIntras extends Migration
{
    private $tablaxxx = 'vcto_intras';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vcto_id')->unsigned()->comment('CAMPO ID DE VALORACION Y CARAC TO');
            $table->integer('prm_intrainsti')->unsigned()->comment('INTRAINSTITUCIONAL');
            $table->timestamps();

            $table->foreign('vcto_id')->references('id')->on('vctos');
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
        Schema::dropIfExists('vcto_intras');
    }
}
