<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDastPuntajes extends Migration
{
    private $tablaxxx = 'dast_puntajes';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->tinyInteger('minimo')->comment('MINIMO DE PUNTAJE PARA RESULTADO');
            $table->tinyInteger('superior')->comment('SUPERIOR DE PUNTAJE PARA RESULTADO');
            $table->string('grado_problema', 100)->comment('Grado de problema (por consumo de drogas)');
            $table->integer('accion_id')->unsigned()->comment('RELACION CON DAST ACCION');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table = CamposMagicos::magicos($table);

            $table->foreign('accion_id')->references('id')->on('dast_acciones');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->tinyInteger('minimo')->comment('MINIMO DE PUNTAJE PARA RESULTADO');
            $table->tinyInteger('superior')->comment('SUPERIOR DE PUNTAJE PARA RESULTADO');
            $table->string('grado_problema', 100)->comment('Grado de problema (por consumo de drogas)');
            $table->integer('accion_id')->unsigned()->comment('RELACION CON DAST ACCION');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
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
