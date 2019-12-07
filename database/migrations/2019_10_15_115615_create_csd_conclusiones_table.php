<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsdConclusionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csd_conclusiones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->string('conclusiones', 4000);
            $table->string('persona_nombre');
            $table->string('persona_doc');
            $table->bigInteger('persona_parent_id')->unsigned();
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_doc2_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('persona_parent_id')->references('id')->on('parametros');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_doc2_id')->references('id')->on('users');
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
        Schema::dropIfExists('csd_conclusiones');
    }
}
