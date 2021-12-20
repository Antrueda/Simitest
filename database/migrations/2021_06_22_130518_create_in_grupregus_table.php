<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInGrupregusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_grupregus', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_libagrup_id')->unsigned()->comment('GRUPO DE LA LINEA BASE');
            $table->foreign('in_libagrup_id')->references('id')->on('in_libagrups');
            $table->integer('temacombo_id')->unsigned()->comment('PREGUNTA DEL GRUPO');
            $table->foreign('temacombo_id')->references('id')->on('temacombos');
            $table->integer('prm_disparar_id')->unsigned()->comment('INDICA SI LA PREGUNTA ES DISPARADORA O COMPLEMENTARIA');
            $table->foreign('prm_disparar_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_in_grupregus', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_libagrup_id')->unsigned()->comment('GRUPO DE LA LINEA BASE');
            $table->integer('temacombo_id')->unsigned()->comment('PREGUNTA DEL GRUPO');
            $table->integer('prm_disparar_id')->unsigned()->comment('INDICA SI LA PREGUNTA ES DISPARADORA O COMPLEMENTARIA');
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
        Schema::dropIfExists('h_in_grupregus');
        Schema::dropIfExists('in_grupregus');
    }
}
