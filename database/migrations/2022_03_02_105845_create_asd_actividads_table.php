<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsdActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asd_actividads', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->comment('NOMBRE DE LA ACTIVIDAD');
            $table->text('descripcion')->comment('DESCRIPCION DE LA ACTIVIDAD');
            $table->integer('tipos_actividad_id')->unsigned()->comment('TIPO DE ACTIVIDAD');
            $table->string('consectivo_item',5)->comment('CONSECUTIVO DEL ITEM');
            $table->integer('estusuarios_id')->unsigned()->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tipos_actividad_id')->references('id')->on('asd_tiactividads');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_asd_actividads', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->comment('NOMBRE DE LA ACTIVIDAD');
            $table->text('descripcion')->comment('DESCRIPCION DE LA ACTIVIDAD');
            $table->integer('tipos_actividad_id')->unsigned()->comment('TIPO DE ACTIVIDAD');
            $table->string('consectivo_item',5)->comment('CONSECUTIVO DEL ITEM');
            $table->integer('estusuarios_id')->unsigned()->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tipos_actividad_id')->references('id')->on('asd_tiactividads');
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
        Schema::dropIfExists('asd_actividads');
        Schema::dropIfExists('h_asd_actividads');
    }
}
