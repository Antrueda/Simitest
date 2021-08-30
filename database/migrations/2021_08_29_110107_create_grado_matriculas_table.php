<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradoMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_matriculas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_grado_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('prm_grado_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('grado_matriculas');
    }
}
