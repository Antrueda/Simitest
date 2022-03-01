<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIEstadoM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_estado_m', function (Blueprint $table) {
            $table->integer('id',10)->primary()->comment('LLAVE PRIMARIA A MATRICULA ACADEMIA NNAJ');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('i_matricula_nnajs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_estado_m');
    }
}
