<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_cargos', function (Blueprint $table) {
             $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('s_cargo');
            $table->integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_cargos');
    }
}
