<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisPestaniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_pestanias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_pestania');
            $table->bigInteger('sis_menu_id')->unsigned();
            $table->foreign('sis_menu_id')->references('id')->on('sis_menus');
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
        Schema::dropIfExists('sis_pestanias');
    }
}
