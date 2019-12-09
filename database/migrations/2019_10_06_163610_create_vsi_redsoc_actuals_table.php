<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiRedsocActualsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_redsoc_actuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_tipo_id')->unsigned();
            $table->string('nombre');
            $table->string('servicio', 4000);
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('vsi_redsoc_actuals');
    }
}