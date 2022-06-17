<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculaCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula_cursos', function (Blueprint $table) {
                $table->increments('id')->start(1)->nocache();
                $table->date('fecha')->comment('FECHA DE DILIGENCIAMIENTO');
                $table->string('doc_autorizado', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
                $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
                $table->foreign('upi_id')->references('id')->on('sis_depens');
                $table->integer('serv_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
                $table->foreign('serv_id')->references('id')->on('sis_servicios');
                $table->string('telefono', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
                $table->string('celular', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
                $table->string('celular2', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
                $table->string('ape1_autorizado', 120)->nullable()->comment('CAMPO PRIMER APELLIDO PERSONA AUTORIZADA');
                $table->string('ape2_autorizado', 120)->nullable()->comment('CAMPO SEGUNDO APELLIDO PERSONA AUTORIZADA');
                $table->string('nom1_autorizado', 120)->nullable()->comment('CAMPO PRIMER NOMBRE PERSONA AUTORIZADA');
                $table->string('nom2_autorizado', 120)->nullable()->comment('CAMPO SEGUNDO NOMBRE PERSONA AUTORIZADA');
                $table->integer('prm_doc_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
                $table->foreign('prm_doc_id')->references('id')->on('parametros');
                $table->integer('prm_parentezco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PARENTESCO');
                $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
                $table->integer('prm_ocupacion_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO AUTORIZADO');
                $table->foreign('prm_ocupacion_id')->references('id')->on('parametros');
                $table->integer('prm_grupo')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->foreign('prm_grupo')->references('id')->on('grupo_matriculas');
                $table->integer('sis_nnaj_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
                $table->integer('prm_curso')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->foreign('prm_curso')->references('id')->on('parametros');
                $table->integer('curso_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->foreign('curso_id')->references('id')->on('cursos');
                $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->foreign('user_id')->references('id')->on('users');
                $table = CamposMagicos::magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matricula_cursos');
    }
}
