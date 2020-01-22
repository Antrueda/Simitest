<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgAsistentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_asistentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ag_actividad_id')->unsigned();
            $table->bigInteger('fi_dato_basico_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('ag_actividad_id')->references('id')->on('ag_actividads');
            $table->foreign('fi_dato_basico_id')->references('id')->on('fi_datos_basicos');
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
        Schema::dropIfExists('ag_asistentes');
    }
}
