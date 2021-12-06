<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_modulos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('cursos_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('cursos_id')->references('id')->on('cursos');
            $table->integer('modulo_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('modulo_id')->references('id')->on('modulos');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_curso_modulos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('cursos_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('modulo_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_modulos');
        Schema::dropIfExists('h_curso_modulos');
    }
}
