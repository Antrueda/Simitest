<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsdRedsocPasadosTable extends Migration{

    public function up(){
        Schema::create('csd_redsoc_pasados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->string('nombre');
            $table->string('servicios',120);
            $table->integer('cantidad')->nullable();
            $table->bigInteger('prm_unidad_id')->unsigned();
            $table->integer('ano');
            $table->string('retiro', 4000)->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_unidad_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->engine = 'InnoDB';

        });
    }

    public function down(){
        Schema::dropIfExists('csd_redsoc_pasados');
    }
}
