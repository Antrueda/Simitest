<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHMatriculaCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_matricula_cursos', function (Blueprint $table) {
                $table->increments('id')->start(1)->nocache();
                $table->date('fecha')->comment('FECHA DE DILIGENCIAMIENTO');
                $table->string('doc_autorizado', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
                $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
                $table->integer('serv_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
                $table->string('telefono', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
                $table->string('celular', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
                $table->string('celular2', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
                $table->string('ape1_autorizado', 120)->nullable()->comment('CAMPO PRIMER APELLIDO PERSONA AUTORIZADA');
                $table->string('ape2_autorizado', 120)->nullable()->comment('CAMPO SEGUNDO APELLIDO PERSONA AUTORIZADA');
                $table->string('nom1_autorizado', 120)->nullable()->comment('CAMPO PRIMER NOMBRE PERSONA AUTORIZADA');
                $table->string('nom2_autorizado', 120)->nullable()->comment('CAMPO SEGUNDO NOMBRE PERSONA AUTORIZADA');
                $table->integer('prm_doc_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
                $table->integer('prm_parentezco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PARENTESCO');
                $table->integer('prm_ocupacion_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO AUTORIZADO');
                $table->integer('prm_grupo')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->integer('sis_nnaj_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->integer('prm_curso')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->integer('curso_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
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
        Schema::dropIfExists('matricula_cursos');
    }
}
