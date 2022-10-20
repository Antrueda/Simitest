<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDastResultados extends Migration
{
    private $tablaxxx = 'dast_resultados';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('dast_id')->unique()->unsigned()->comment('CAMPO ID FORANEA DASTS');
            $table->tinyInteger('resultado')->comment('RESULTADO DAST');
            $table->string('valores', 30)->comment('VALORES PUNTAJE MENOR Y SUPERIOR');
            $table->string('grado_problema', 100)->comment('GRADO DEL PROBLEMA');
            $table->string('accion', 100)->comment('ACCION');
            $table = CamposMagicos::magicos($table);

            $table->foreign('dast_id')->references('id')->on('dasts');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('dast_id')->unique()->unsigned()->comment('CAMPO ID FORANEA DASTS');
            $table->tinyInteger('resultado')->comment('RESULTADO DAST');
            $table->string('valores', 30)->comment('VALORES PUNTAJE MENOR Y SUPERIOR');
            $table->string('grado_problema', 100)->comment('GRADO DEL PROBLEMA');
            $table->string('accion', 100)->comment('ACCION');
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
