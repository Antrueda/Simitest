<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabrrds extends Migration
{
    private $tablaxxx = 'labrrds';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fechdili')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_origen_id')->unsigned()->comment('UPI ORIGEN');
            $table->integer('sis_atenc_id')->unsigned()->comment('UPI ATENCION');
            $table->integer('prm_faseacomp')->unsigned()->comment('FASE DE ACOMPANAMIENTO');
            $table->text('observacion')->comment('OBSERVACIONES');
            $table->tinyInteger('num_sesion')->comment('NUMERO DE SESION');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_faseacomp')->references('id')->on('parametros');
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
