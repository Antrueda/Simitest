<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiAutorizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_autorizacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_autorizo_id')->unsigned();
            $table->bigInteger('fi_composicion_fami_id')->unsigned();
            $table->bigInteger('i_prm_parentesco_id')->unsigned();
            $table->date('d_autorizacion');
            $table->bigInteger('i_prm_tipo_diligencia_id')->unsigned();
            
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_autorizo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_parentesco_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_diligencia_id')->references('id')->on('parametros');
            $table->foreign('fi_composicion_fami_id')->references('id')->on('fi_composicion_famis');
        });

        Schema::create('fi_modalidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_autorizacion_id')->unsigned();
            $table->bigIntegeR('i_prm_modalidad_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_autorizacion_id')->references('id')->on('fi_autorizacions');
            $table->foreign('i_prm_modalidad_id')->references('id')->on('parametros');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_modalidads');
        Schema::dropIfExists('fi_autorizacions');
    }
}

