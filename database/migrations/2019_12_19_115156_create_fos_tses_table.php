<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFosTsesTable extends Migration{

    public function up(){
        Schema::create('fos_tses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fos_area_id')->unsigned();
            $table->string('nombre', 120);
            $table->text('descripcion',4000)->nullable();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->timestamps();
            

            $table->foreign('fos_area_id')->references('id')->on('fos_areas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');

        });
    }

    public function down(){
        Schema::dropIfExists('fos_tses');
    }
}
