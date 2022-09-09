<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDasts extends Migration
{
    private $tablaxxx = 'dasts';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->integer('prm_requiere_vespa')->unsigned()->comment('PARAMETRO REQUIERE APLICACION DEL VESPA');
            $table->date('fecha_vespa')->comment('FECHA APLICACION VESPA');
            $table->text('accion_desarrolla')->comment('TIPO DE ACCION A DESARROLLAR');
            $table->integer('prm_patron_con')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->text('obs_patron_con')->comment('OBSERVACION PATRON DE CONSUMO');
            $table->text('accion_curso')->comment('ACCION A REALIZAR POR CURSO DE VIDA');
            $table->text('observacion')->comment('OBSERVACION');
            $table->integer('prm_diligencia')->unsigned()->comment('DILIGENCIAMIENTO DEL CUESTIONARIO');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('prm_requiere_vespa')->references('id')->on('parametros');
            $table->foreign('prm_patron_con')->references('id')->on('parametros');
            $table->foreign('prm_diligencia')->references('id')->on('parametros');
            $table->foreign('user_fun_id')->references('id')->on('users');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->integer('prm_requiere_vespa')->unsigned()->comment('PARAMETRO REQUIERE APLICACION DEL VESPA');
            $table->date('fecha_vespa')->comment('FECHA APLICACION VESPA');
            $table->text('accion_desarrolla')->comment('TIPO DE ACCION A DESARROLLAR');
            $table->integer('prm_patron_con')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->text('obs_patron_con')->comment('OBSERVACION PATRON DE CONSUMO');
            $table->text('accion_curso')->comment('ACCION A REALIZAR POR CURSO DE VIDA');
            $table->text('observacion')->comment('OBSERVACION');
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
