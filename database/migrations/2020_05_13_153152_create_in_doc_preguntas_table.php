<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInDocPreguntasTable extends Migration
{
    private $tablaxxx = 'in_doc_preguntas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_ligru_id')->unsigned()->comment('LLAVE FORANEA TABLA in_ligrus');
            $table->integer('sis_tcampo_id')->unsigned()->comment('LLAVE FORANEA TABLA sis_tcampos');
            $table->foreign('sis_tcampo_id')->references('id')->on('sis_tcampos');
            $table->foreign('in_ligru_id')->references('id')->on('in_ligrus');
            $table->unique(['in_ligru_id', 'sis_tcampo_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS PREGUNTAS DE CADA CAMPO EXISTENTE EN LOS FORMATOS DE IDENTIFICACION Y CARACTERIZACION DE LOS BENEFICIARIOS DE LOS SERVICIOS DEL IDIPRON'");
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
