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
            $table->integer('cursos_id')->unsigned()->nullable()->comment('CAMPO ID CURSO O TALLER');
            $table->foreign('cursos_id')->references('id')->on('matricula_cursos');
            $table->date('fecha')->comment('FECHA DILIGENCIAMIENTO DE LA PRUEBA');
            $table->integer('unidades')->comment('CAMPO NUMERO DE UNIDADES DEL CURSO');
            $table->integer('sis_nnaj_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('apoyo_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('apoyo_id')->references('id')->on('users');
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
        Schema::dropIfExists('valora_comps');
    }
}
