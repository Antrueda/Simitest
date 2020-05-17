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
            
            $table->bigInteger('sis_tcampo_id')->unsigned()->unique();
            $table->bigInteger('user_crea_id')->unsigned(); 
            
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->timestamps();            
            
           // $table->foreign('sis_actividad_id')->references('id')->on('sis_actividads');
            $table->foreign('in_fuente_id')->references('id')->on('in_fuentes');
            $table->foreign('in_pregunta_id')->references('id')->on('in_preguntas');
            $table->foreign('sis_tabla_id')->references('id')->on('sis_tablas');
            $table->foreign('sis_tcampo_id')->references('id')->on('sis_tcampos');
            
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
