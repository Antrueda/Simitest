<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgRelacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_relacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ag_actividad_id')->unsigned();
            $table->bigInteger('ag_recurso_id')->unsigned();
            $table->integer('i_cantidad');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('ag_actividad_id')->references('id')->on('ag_actividads');
            $table->foreign('ag_recurso_id')->references('id')->on('ag_recursos');
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
        Schema::dropIfExists('ag_relacions');
    }
}
