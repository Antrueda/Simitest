<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisLocalupzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_localupzs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_localidad_id')->unsigned();
            $table->bigInteger('sis_upz_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->unique(['sis_localidad_id','sis_upz_id']);
            $table->timestamps();
        });
        Schema::create('h_sis_localupzs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_localidad_id')->unsigned();
            $table->bigInteger('sis_upz_id')->unsigned();
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');

            $table->unique(['sis_localidad_id','sis_upz_id']);
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_sis_localupzs');
        Schema::dropIfExists('sis_localupzs');
    }
}
