<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInLigruTemacomboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_ligru_temacombo', function (Blueprint $table) {
            $table->id();
            $table->integer('in_ligru_id')->unsigned()->comment('ID DE LA TABLA IN_LIGRUS');            
            $table->integer('temacombo_id')->unsigned()->comment('ID DE LA TABLA TEMACOMBOS');
            $table->foreign('in_ligru_id')->references('id')->on('IN_LIGRUS');
            $table->foreign('temacombo_id')->references('id')->on('TEMACOMBOS');
            $table->timestamps();
            $table->unique(['in_ligru_id', 'temacombo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_ligru_temacombo');
    }
}
