<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgiItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgi_items', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('categoria_id')->comment('CATEGORIA');
            $table->integer('prm_letras_id')->unsigned()->comment('ABCDARIO');
            $table->string('habilidades')->comment('HABILIDADES');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('categoria_id')->references('id')->on('cgi_categorias');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_cgi_items', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('categoria_id')->comment('CATEGORIA');
            $table->integer('prm_letras_id')->unsigned()->comment('ABCDARIO');
            $table->string('habilidades')->comment('HABILIDADES');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO DE LA ACTIVIDAD');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

              $table->foreign('categoria_id')->references('id')->on('cgi_categorias');
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
        Schema::dropIfExists('cgi_items');
        Schema::dropIfExists('h_cgi_items');
    }
}
