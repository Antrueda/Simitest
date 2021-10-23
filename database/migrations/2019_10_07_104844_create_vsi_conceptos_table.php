<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiConceptosTable extends Migration
{
    private $tablaxxx = 'vsi_conceptos';
    private $tablaxxx2 = 'vsi_concep_red';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->string('concepto',4000)->comment('CAMPO ABIERTO CONCEPTO');
            $table->integer('prm_ingreso_id')->unsigned()->nullable()->comment('CAMPO CONSIDERA PERTINENTE EL INGRESO AL IDIPRON');
            $table->string('porque')->nullable()->comment('CAMPO ABIERTO DE POR QUE');
            $table->string('cual', 120)->nullable()->comment('CAMPO CUALES REDES INTERINSTITUCIONAL');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_ingreso_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA IMPRESIÓN DIAGNÓSTICA Y EL ANÁLISIS SOCIAL DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACE LA RED INSTITUCIONAL');
            $table->integer('vsi_concepto_id')->unsigned()->comment('CAMPO ID DE CONCEPTO');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_concepto_id')->references('id')->on('vsi_conceptos');
            $table->unique(['parametro_id', 'vsi_concepto_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LA RED INSTITUCIONAL DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
