<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIMatriculaNnajsTable extends Migration
{
    private $tablaxxx = 'i_matricula_nnajs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('imatricula_id')->unsigned()->comment('ID DE LA MATRICULA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('ID DEL NNAJ');
            $table->integer('prm_copdoc')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('prm_certif')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->string('s_grado')->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->string('asignatura')->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('prm_matric')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('prm_simianti')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->string('numeromatricula')->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->longText('observaciones')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->foreign('prm_copdoc')->references('id')->on('parametros');
            $table->foreign('prm_certif')->references('id')->on('parametros');
            $table->foreign('prm_matric')->references('id')->on('parametros');
            $table->foreign('prm_simianti')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('imatricula_id')->references('id')->on('i_matriculas');
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
