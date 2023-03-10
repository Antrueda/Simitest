<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeAsisteciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ae_asistencias', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_encuentro_id')->unsigned();
            $table->integer('user_funcontr_id')->unsigned();
            $table->integer('respoupi_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_funcontr_id')->references('id')->on('users');
            $table->foreign('respoupi_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_ae_asistencias', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_encuentro_id')->unsigned();
            $table->integer('user_funcontr_id')->unsigned();
            $table->integer('respoupi_id')->unsigned();
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
        Schema::dropIfExists('ae_asistecias');
        Schema::dropIfExists('h_ae_asistecias');
    }
}
