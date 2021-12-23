<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInNnajlibasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_nnajlibas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA LINEA BASE');
            $table->integer('in_areaindi_id')->unsigned()->comment('INDICADOR DE LA LINEA BASE');
            $table->integer('in_indiliba_id')->unsigned()->comment('LINEA BASE');
            $table->integer('in_libagrup_id')->unsigned()->comment('GRUPO DE LA LINEA BASE');
            $table->integer('in_grupregu_id')->unsigned()->comment('PRGUNTA DEL GRUPO');
            $table->integer('in_pregresp_id')->unsigned()->comment('RESPUESTA');

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('in_areaindi_id')->references('id')->on('in_areaindis');
            $table->foreign('in_indiliba_id')->references('id')->on('in_indilibas');
            $table->foreign('in_libagrup_id')->references('id')->on('in_libagrups');
            $table->foreign('in_grupregu_id')->references('id')->on('in_grupregus');
            $table->foreign('in_pregresp_id')->references('id')->on('in_pregresps');
            $table->unique(['sis_nnaj_id','in_areaindi_id','in_indiliba_id','in_libagrup_id','in_grupregu_id','in_pregresp_id']);
            $table = CamposMagicos::magicosFk($table,'nnlb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_nnajlibas');
    }
}
