<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInValidacionsTable extends Migration
{
    private $tablaxxx = 'in_validacions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            // $table->integer('sis_actividad_id')->unsigned();
            $table->integer('in_pregunta_id')->unsigned();
            $table->integer('in_fuente_id')->unsigned();
            $table->integer('sis_tabla_id')->unsigned();
            $table->integer('sis_tcampo_id')->unsigned()->unique();
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
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
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS RESTRICCIONES A LAS PREGUNTAS Y TAMBIEN RELACIONA LAS TABLAS Y LOS CAMPOS DONDE SERA ALMACENADOS LOS DATOS'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}