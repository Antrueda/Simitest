<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresoDeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egreso_deres', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('centro_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('centro_id')->references('id')->on('centro_zonals');
            $table->integer('censec_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('censec_id')->references('id')->on('centro_zosecs');
            $table->integer('egreso_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('egreso_id')->references('id')->on('s_egresos');    
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
        Schema::dropIfExists('egreso_deres');
    }
}
