<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVctos extends Migration
{
    private $tablaxxx = 'vctos';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->text('concepto')->comment('CONCEPTO OCUPACIONAL');
            $table->string("interinstitu",120)->comment('CAMPO Interinstitucional');
            $table->integer('prm_remitir')->unsigned()->comment('Remitir si/no');
            $table->integer('user_res_id')->unsigned()->comment('RESPONSABLE');
            $table = CamposMagicos::magicos($table);

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_remitir')->references('id')->on('parametros');
            $table->foreign('user_res_id')->references('id')->on('users');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->text('concepto')->comment('CONCEPTO OCUPACIONAL');
            $table->string("interinstitu",120)->comment('CAMPO Interinstitucional');
            $table->integer('prm_remitir')->unsigned()->comment('Remitir si/no');
            $table->integer('user_res_id')->unsigned()->comment('RESPONSABLE');
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
