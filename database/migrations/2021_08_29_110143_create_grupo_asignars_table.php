<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoAsignarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_asignars', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table = CamposMagicos::getForeign($table, 'sis_depen');
            $table = CamposMagicos::getForeign($table, 'sis_servicio');
//            $table = CamposMagicos::getForeign($table, 'grupo_matricula');
            $table->integer('grupo_matricula_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('grupo_matricula_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('grupo_asignars');
    }
}

