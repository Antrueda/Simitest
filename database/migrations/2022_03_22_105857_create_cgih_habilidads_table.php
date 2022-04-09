<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgihHabilidadsTable extends Migration
{
    /**
     * 
     * Run the migrations.
     * cgih_items
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgih_habilidads', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('categorias_id')->comment('CATEGORIA');
            $table->integer('cursos_id')->unsigned()->comment('CURSOS');
            $table->integer('prm_letras_id')->unsigned()->comment('ABCDARIO');
            $table->string('habilidades')->comment('HABILIDADES');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cursos_id')->references('id')->on('cursos');
            $table->foreign('categorias_id')->references('id')->on('cgih_categorias');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_cgih_habilidads', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('categorias_id')->comment('CATEGORIA');
            $table->integer('prm_letras_id')->unsigned()->comment('ABCDARIO');
            $table->string('habilidades')->comment('HABILIDADES');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('categorias_id')->references('id')->on('cgih_categorias');
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
        Schema::dropIfExists('cgih_habilidads');
        Schema::dropIfExists('h_cgih_habilidads');
    }
}
