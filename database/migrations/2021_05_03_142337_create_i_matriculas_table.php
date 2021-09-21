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
            $table->date('fecha')->nullable()->comment('FECHA QUE RETORNA EL NNA');
            $table->string('observaciones')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('prm_serv_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('prm_grado')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('prm_grupo')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('prm_estra')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_doc1')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('user_doc2')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('responsable_id')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->foreign('responsable_id')->references('id')->on('users');
            $table->foreign('user_doc1')->references('id')->on('users');
            $table->foreign('user_doc2')->references('id')->on('users');
            $table->foreign('prm_upi_id')->references('id')->on('sis_depens');
            $table->foreign('prm_serv_id')->references('id')->on('sis_servicios');
            $table->foreign('prm_grado')->references('id')->on('parametros');
            $table->foreign('prm_grupo')->references('id')->on('parametros');
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
