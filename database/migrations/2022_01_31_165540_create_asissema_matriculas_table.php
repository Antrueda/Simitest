<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsissemaMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asisema_matriculas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('asissema_id')->unsigned()->comment('ASISTENCIA SEMANAL');
            $table->integer('matricula_curso_id')->unsigned()->nullable()->comment('MATRICULA CURSOS');
            $table->integer('matric_tecni_id')->unsigned()->nullable()->comment('MATRICULA TECNICAS CONVENIO');
            $table->integer('matric_convenio_id')->unsigned()->nullable()->comment('MATRICULA CONVENIO');
            $table->integer('matric_acade_id')->unsigned()->nullable()->comment('MATRICULA ACADEMICA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('asissema_id')->references('id')->on('asissemas');
            $table->foreign('matricula_curso_id')->references('id')->on('matricula_cursos');
            $table->foreign('matric_convenio_id')->references('id')->on('sis_nnajs');
            $table->foreign('matric_acade_id')->references('id')->on('i_matricula_nnajs');
        });

        Schema::create('h_asisema_matriculas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('asissema_id')->unsigned()->comment('ASISTENCIA SEMANAL');
            $table->integer('matricula_curso_id')->unsigned()->nullable()->comment('MATRICULA CURSOS');
            $table->integer('matric_tecni_id')->unsigned()->nullable()->comment('MATRICULA TECNICAS CONVENIO');
            $table->integer('matric_convenio_id')->unsigned()->nullable()->comment('MATRICULA CONVENIO');
            $table->integer('matric_acade_id')->unsigned()->nullable()->comment('MATRICULA ACADEMICA');
          
            
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
        Schema::dropIfExists('asisema_matriculas');
         Schema::dropIfExists('h_asisema_matriculas');
    }
}
