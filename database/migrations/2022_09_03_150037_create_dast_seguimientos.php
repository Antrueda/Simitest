<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDastSeguimientos extends Migration
{
    private $tablaxxx = 'dast_seguimientos';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('dast_id')->unsigned()->comment('CAMPO ID FORANEA DASTS');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->integer('prm_tipo_seguimiento')->unsigned()->comment('PARAMETRO TIPO DE SEGUIMIENTO');
            $table->text('obs_seguimiento')->comment('OBSERVACIONES SEGUIMIENTO');
            $table->integer('prm_diligencia')->unsigned()->comment('DILIGENCIAMIENTO DEL CUESTIONARIO');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('dast_id')->references('id')->on('dasts');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('prm_tipo_seguimiento')->references('id')->on('parametros');
            $table->foreign('prm_diligencia')->references('id')->on('parametros');
            $table->foreign('user_fun_id')->references('id')->on('users');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('dast_id')->unsigned()->comment('CAMPO ID FORANEA DASTS');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->integer('prm_tipo_seguimiento')->unsigned()->comment('PARAMETRO TIPO DE SEGUIMIENTO');
            $table->text('obs_seguimiento')->comment('OBSERVACIONES SEGUIMIENTO');
            $table->integer('prm_diligencia')->unsigned()->comment('DILIGENCIAMIENTO DEL CUESTIONARIO');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
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
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
