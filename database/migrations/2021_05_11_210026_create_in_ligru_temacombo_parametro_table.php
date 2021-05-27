<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInLigruTemacomboParametroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lgtemacombo_parametro', function (Blueprint $table) {
            $table->id();
            $table->integer('in_ligru_temacombo_id')->unsigned()->comment('ID DE LA TABLA IN_LIGRU_TEMACOMBO');            
            $table->integer('parametro_id')->unsigned()->comment('ID DE LA TABLA PARAMETROS');
            $table->foreign('in_ligru_temacombo_id')->references('id')->on('IN_LIGRU_TEMACOMBO');
            $table->foreign('parametro_id')->references('id')->on('PARAMETROS');
            $table->timestamps();
            $table->unique(['in_ligru_temacombo_id', 'parametro_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_ligru_temacombo_parametro');
    }
}
