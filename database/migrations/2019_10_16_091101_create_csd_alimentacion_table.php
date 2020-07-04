<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsdAlimentacionTable extends Migration
{

    public function up()
    {
        Schema::create('csd_alimentacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->integer('cant_personas')->unsigned();
            $table->biginteger('prm_horario_id')->unsigned();
            $table->biginteger('prm_apoyo_id')->unsigned();
            $table->biginteger('prm_entidad_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->bigInteger('prm_tipofuen_id')->unsigned();


            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_horario_id')->references('id')->on('parametros');
            $table->foreign('prm_apoyo_id')->references('id')->on('parametros');
            $table->foreign('prm_entidad_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('csd_aliment_frec', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_alimentacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });

        Schema::create('csd_aliment_compra', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_alimentacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });

        Schema::create('csd_aliment_inge', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_alimentacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });

        Schema::create('csd_aliment_prepara', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_alimentacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('csd_aliment_prepara');
        Schema::dropIfExists('csd_aliment_inge');
        Schema::dropIfExists('csd_aliment_compra');
        Schema::dropIfExists('csd_aliment_frec');
        Schema::dropIfExists('csd_alimentacions');
    }
}
