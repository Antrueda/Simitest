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
            $table->increments('id')->start(125)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_localidad_id')->unsigned()->comment('CAMPO ID DE LA LOCALIDAD');
            $table->integer('sis_upz_id')->unsigned()->comment('CAMPO ID DE LA UPZ');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->unique(['sis_localidad_id','sis_upz_id'],'locupz_un1');
            $table->timestamps();
        });
        Schema::create('h_sis_localupzs', function (Blueprint $table) {
            $table->increments('id')->start(125)->nocache();
            $table->integer('sis_localidad_id')->unsigned()->comment('CAMPO ID DE LA LOCALIDAD');
            $table->integer('sis_upz_id')->unsigned()->comment('CAMPO ID DE LA UPZ');
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
