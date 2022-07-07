<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIMatriculasTable extends Migration
{
    private $tablaxxx = 'i_matriculas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->nullable()->comment('FECHA FECHA DE LA MATRICULA');
            $table->string('observaciones',4000)->nullable()->comment('OBSERVACION DE LA MATRICULA');
            $table->integer('prm_upi_id')->unsigned()->comment('DEPENDENCIA O UPI DEL PROFESIONAL QUE CREA EL REGISTRO');
            $table->integer('prm_serv_id')->unsigned()->comment('SERVICIO DEL DEPENDENCIA SELECCIONADA');
            $table->integer('prm_grado')->unsigned()->nullable()->comment('GRADO AL QUE SE MATRICULA EL NNAJ');
            $table->integer('prm_grupo')->unsigned()->nullable()->comment('GRUPO AL QUE PERTENECE EL NNAJ');
            $table->integer('prm_periodo')->unsigned()->nullable()->comment('PERIODO ACADEMICO EN EL QUE SE MATRICULA');
            $table->integer('prm_estra')->unsigned()->nullable()->comment('ESTRATEGIA A LA QUE PERTENCE EL NNAJ');
            $table->integer('user_doc1')->unsigned()->nullable()->comment('PERSONA QUEN ENTREGA LA INSCRIPCION DE MATRICULA EL SEGUNDO QUE APARECE EN EL FORMULARIO');
            $table->integer('apoyo_id')->unsigned()->nullable()->comment('PERSONA QUEN ENTREGA LA INSCRIPCION DE MATRICULA EL PRIMERO QUE APARECE EN EL FORMULARIO');
            $table->integer('user_doc2')->unsigned()->nullable()->comment('PERSONA QUEN ENTREGA LA INSCRIPCION DE MATRICULA EL TERCERO QUE APARECE EN EL FORMULARIO');
            $table->integer('responsable_id')->unsigned()->nullable()->comment('PERSONA RESPONSABLE DE LA UPI');
            $table->foreign('responsable_id')->references('id')->on('users');
            $table->foreign('user_doc1')->references('id')->on('users');
            $table->foreign('user_doc2')->references('id')->on('users');
            $table->foreign('apoyo_id')->references('id')->on('users');
            $table->foreign('prm_upi_id')->references('id')->on('sis_depens');
            $table->foreign('prm_serv_id')->references('id')->on('sis_servicios');
            $table->foreign('prm_grado')->references('id')->on('eda_grados');
            $table->foreign('prm_grupo')->references('id')->on('grupo_matriculas');
            $table->foreign('prm_periodo')->references('id')->on('parametros');
            $table->foreign('prm_estra')->references('id')->on('parametros');
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
        Schema::dropIfExists($this->tablaxxx);
    }
}

