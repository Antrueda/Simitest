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
            $table->id();
            $table->integer('asissema_id')->unsigned()->comment('ASISTENCIA SEMANAL');
            $table->integer('matricula_curso_id')->unsigned()->nullable()->comment('MATRICULA CURSOS');
            $table->integer('matric_tecni_id')->unsigned()->nullable()->comment('MATRICULA TECNICAS CONVENIO');
            $table->integer('matric_convenio_id')->unsigned()->nullable()->comment('MATRICULA CONVENIO');
            $table->integer('matric_acade_id')->unsigned()->nullable()->comment('MATRICULA ACADEMICA');
            $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('asissema_id')->references('id')->on('asissemas');
            $table->foreign('matricula_curso_id')->references('id')->on('matricula_cursos');
            $table->foreign('matric_tecni_id')->references('id')->on('matric_tecni_conves');
            $table->foreign('matric_convenio_id')->references('id')->on('matric_convenios');
            $table->foreign('matric_acade_id')->references('id')->on('i_matricula_nnajs');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        // Schema::create('h_asisema_sis_nnaj', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('asissema_id')->unsigned()->comment('ASISTENCIA SEMANAL');
        //     $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
        //     $table->integer('sis_esta_id')->unsigned()->comment('ESTADO');
        //     $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
        //     $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
        //     $table->timestamps();
        //     $table->softDeletes();

        //     $table->foreign('asissema_id')->references('id')->on('asissemas');
        //     $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
        //     $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
        //     $table->foreign('user_crea_id')->references('id')->on('users');
        //     $table->foreign('user_edita_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asisema_matriculas');
        // Schema::dropIfExists('h_asisema_sis_nnaj');
    }
}
