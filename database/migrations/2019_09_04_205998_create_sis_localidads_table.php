<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisLocalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_localidads', function (Blueprint $table) {
             $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('s_localidad')->unique();
            $table->integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->boolean('estado');
            $table->timestamps();
            // $table->foreign('user_crea_id')->references('id')->on('users');
            // $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_localidads');
    }
}
