<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValoraCompsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valora_comps', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('curso_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('curso_id')->references('id')->on('matricula_cursos');
            $table->integer('conocimiento')->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('desempeno')->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('producto')->comment('CAMPO ID DE DEPARTAMENTO');
            $table = CamposMagicos
            
            ::magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valora_comps');
    }
}
