<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVihs extends Migration
{
    private $tablaxxx = 'vihs';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->text('antecede_clin')->comment('ANTECEDENTES CLÍNICOS');
            $table->integer('prm_dinconsumo')->unsigned()->comment('DINAMICAS CONSUMO DE SUSTANCIAS');
            $table->text('obs_sustanpsico')->comment('OBSERVACIONES CONSUMO DE SUSTANCIAS');
            $table->integer('prm_autocuidado')->unsigned()->comment('AUTOCUIDADO');
            $table->integer('prm_rutinas')->unsigned()->comment('HÁBITOS Y RUTINAS');
            $table->text('obs_habitos')->comment('OBSERVACIONES HÁBITOS Y RUTINAS');
            $table->text('antece_ocupa')->comment('ANTECEDENTES OCUPACIONALES');
            $table->text('antece_tiempo')->comment('ANTECEDENTES TIEMPO LIBRE');
            $table->text('prospeccion')->comment('PROYECTO DE VIDA');
            $table->text('familia_nucleo')->comment('FAMILIA');
            $table->text('conc_ocupa')->comment('CONCEPTO DE LA VALORACION E IDEN HABILIDADES');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_dinconsumo')->references('id')->on('parametros');
            $table->foreign('prm_autocuidado')->references('id')->on('parametros');
            $table->foreign('prm_rutinas')->references('id')->on('parametros');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->text('antecede_clin')->comment('ANTECEDENTES CLÍNICOS');
            $table->integer('prm_dinconsumo')->unsigned()->comment('DINAMICAS CONSUMO DE SUSTANCIAS');
            $table->text('obs_sustanpsico')->comment('OBSERVACIONES CONSUMO DE SUSTANCIAS');
            $table->integer('prm_autocuidado')->unsigned()->comment('AUTOCUIDADO');
            $table->integer('prm_rutinas')->unsigned()->comment('HÁBITOS Y RUTINAS');
            $table->text('obs_habitos')->comment('OBSERVACIONES HÁBITOS Y RUTINAS');
            $table->text('antece_ocupa')->comment('ANTECEDENTES OCUPACIONALES');
            $table->text('antece_tiempo')->comment('ANTECEDENTES TIEMPO LIBRE');
            $table->text('prospeccion')->comment('PROYECTO DE VIDA');
            $table->text('familia_nucleo')->comment('FAMILIA');
            $table->text('conc_ocupa')->comment('CONCEPTO DE LA VALORACION E IDEN HABILIDADES');
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
