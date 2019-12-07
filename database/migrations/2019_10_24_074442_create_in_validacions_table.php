<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInValidacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_validacions', function (Blueprint $table) {
            $table->bigIncrements('id');
           // $table->bigInteger('sis_actividad_id')->unsigned();
            $table->bigInteger('in_pregunta_id')->unsigned();
            $table->bigInteger('in_fuente_id')->unsigned();
            $table->bigInteger('sis_tabla_id')->unsigned();
            
            $table->bigInteger('sis_campo_tabla_id')->unsigned()->unique();
            $table->integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->boolean('activo')->default(1);
            $table->timestamps();            
            $table->engine = 'InnoDB';
           // $table->foreign('sis_actividad_id')->references('id')->on('sis_actividads');
            $table->foreign('in_fuente_id')->references('id')->on('in_fuentes');
            $table->foreign('in_pregunta_id')->references('id')->on('in_preguntas');
            $table->foreign('sis_tabla_id')->references('id')->on('sis_tablas');
            $table->foreign('sis_campo_tabla_id')->references('id')->on('sis_campo_tablas');
            
            $table->unique(['in_fuente_id', 'in_pregunta_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_validacions');
    }
}
