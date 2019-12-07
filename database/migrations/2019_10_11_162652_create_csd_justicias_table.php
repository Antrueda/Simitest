<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsdJusticiasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('csds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proposito', 200);
            $table->date('fecha');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('csd_sis_nnaj', function (Blueprint $table) {
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->unique(['csd_id', 'sis_nnaj_id']);
            $table->engine = 'InnoDB';
        });
        Schema::create('csd_justicias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_vinculado_id')->unsigned();
            $table->bigInteger('prm_vin_causa_id')->unsigned()->nullable();
            $table->bigInteger('prm_riesgo_id')->unsigned();
            $table->bigInteger('prm_rie_causa_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_vinculado_id')->references('id')->on('parametros');
            $table->foreign('prm_vin_causa_id')->references('id')->on('parametros');
            $table->foreign('prm_riesgo_id')->references('id')->on('parametros');
            $table->foreign('prm_rie_causa_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('csd_nnaj_especial', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->unique(['parametro_id', 'csd_id']);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('csd_nnaj_especial');
        Schema::dropIfExists('csd_justicias');
        Schema::dropIfExists('csd_sis_nnaj');
        Schema::dropIfExists('csds');
    }
}