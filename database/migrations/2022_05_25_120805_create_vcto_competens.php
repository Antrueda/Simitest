<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVctoCompetens extends Migration
{
    private $tablaxxx = 'vcto_competens';
    
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vcto_id')->unsigned()->comment('CAMPO ID DE VALORACION Y CARAC TO');
            $table->text('ante_clinico')->comment('ANTECEDENTES CLINICOS');
            $table->integer('prm_dinsustancias')->unsigned()->comment('DINAMICAS CONSUMO DE SUSTANCIAS');
            $table->text('obs_clinico')->comment('OBSERVACION CLINICO');
            $table->integer('prm_alimentacion')->unsigned()->comment('ALIMENTACION');
            $table->integer('prm_higienemayor')->unsigned()->comment('HIGIENE MAYOR');
            $table->integer('prm_higienemenor')->unsigned()->comment('HIGIENE MENOR');
            $table->text('obs_higiene')->nullable()->comment('OBSERVACION HIGIENE');
            $table->integer('prm_vestido')->unsigned()->comment('VESTIDO');
            $table->integer('prm_habitos')->unsigned()->comment('HABITOS Y RUTINAS');
            $table->integer('prm_activis')->unsigned()->comment('ACTIVIDADES INSTRUMENTALES');
            $table->integer('prm_dominancia')->unsigned()->comment('DOMINANCIA MANUAL');
            $table->text('obs_general')->nullable()->comment('OBSERVACION GENERAL');
            $table = CamposMagicos::magicos($table);

            $table->foreign('vcto_id')->references('id')->on('vctos');
            $table->foreign('prm_dinsustancias')->references('id')->on('parametros');
            $table->foreign('prm_alimentacion')->references('id')->on('parametros');
            $table->foreign('prm_higienemayor')->references('id')->on('parametros');
            $table->foreign('prm_higienemenor')->references('id')->on('parametros');
            $table->foreign('prm_vestido')->references('id')->on('parametros');
            $table->foreign('prm_habitos')->references('id')->on('parametros');
            $table->foreign('prm_activis')->references('id')->on('parametros');
            $table->foreign('prm_dominancia')->references('id')->on('parametros');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vcto_id')->unsigned()->comment('CAMPO ID DE VALORACION Y CARAC TO');
            $table->text('ante_clinico')->comment('ANTECEDENTES CLINICOS');
            $table->integer('prm_dinsustancias')->unsigned()->comment('DINAMICAS CONSUMO DE SUSTANCIAS');
            $table->text('obs_clinico')->comment('OBSERVACION CLINICO');
            $table->integer('prm_alimentacion')->unsigned()->comment('ALIMENTACION');
            $table->integer('prm_higienemy')->unsigned()->comment('HIGIENE MAYOR');
            $table->integer('prm_higienemn')->unsigned()->comment('HIGIENE MENOR');
            $table->text('obs_higiene')->comment('OBSERVACION HIGIENE');
            $table->integer('prm_vestido')->unsigned()->comment('VESTIDO');
            $table->integer('prm_habitos')->unsigned()->comment('HABITOS Y RUTINAS');
            $table->integer('prm_activis')->unsigned()->comment('ACTIVIDADES INSTRUMENTALES');
            $table->integer('prm_dominancia')->unsigned()->comment('DOMINANCIA MANUAL');
            $table->text('obs_general')->comment('OBSERVACION GENERAL');
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
