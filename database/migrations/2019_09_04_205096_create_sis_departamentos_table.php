<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_departamentos', function (Blueprint $table) {
             $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('sis_pais_id')->unsigned()->nullable();
            $table->string('s_departamento');
            $table->integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->boolean('estado');
            $table->timestamps();
            $table->foreign('sis_pais_id')->references('id')->on('sis_pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_departamentos');
    }
}
