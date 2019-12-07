<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiDinfamPadresTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_dinfam_padres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_convive_id')->unsigned();
            $table->integer('dia')->unsigned();
            $table->integer('mes')->unsigned();
            $table->integer('ano')->unsigned();
            $table->integer('hijo')->unsigned();
            $table->bigInteger('prm_separa_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_convive_id')->references('id')->on('parametros');
            $table->foreign('prm_separa_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_dinfam_padres');
    }
}