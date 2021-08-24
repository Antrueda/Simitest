<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNnajAsissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nnaj_asiss', function (Blueprint $table) {
            $table->id();
            $table->integer('fi_datos_basico_id')->unsigned();
            $table->integer('prm_pefil_id')->unsigned();
            $table->integer('prm_lugar_focali_id')->unsigned();
            $table->integer('prm_autorizo_id')->unsigned();
            $table->text('observaciones');
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('fi_datos_basico_id')->references('id')->on('fi_datos_basicos');
            $table->foreign('prm_pefil_id')->references('id')->on('parametros');
            $table->foreign('prm_lugar_focali_id')->references('id')->on('parametros');
            $table->foreign('prm_autorizo_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ea_asisnnaj_datauxs');
    }
}
