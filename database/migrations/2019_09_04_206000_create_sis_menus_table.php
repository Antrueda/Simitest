<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('munu');
            $table->string('icono');
            $table->boolean('esmenu');
            $table->bigInteger('sis_documento_fuente_id')->unsigned()->nullable();
            $table->bigInteger('sis_menu_id')->unsigned()->nullable();
            $table->foreign('sis_menu_id')->references('id')->on('sis_menus');
            $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');
            $table->timestamps();
            $table->unique(['sis_menu_id','munu']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_menus');
    }
}
