<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradoAsignarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_asignars', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table = CamposMagicos::getForeign($table, 'sis_depen');
            $table = CamposMagicos::getForeign($table, 'sis_servicio');
//            $table = CamposMagicos::getForeign($table, 'grado_matricula');
            $table->integer('grado_matricula')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('grado_matricula')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grado_asignars');
    }
}
