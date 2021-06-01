<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInIndilibasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_indilibas', function (Blueprint $table) {
            $table->id();
            $table->integer('in_areaindi_id')->unsigned()->comment('INDICADOR');
            $table->integer('in_linea_base_id')->unsigned()->comment('LINEA BASE');
            $table = CamposMagicos::magicosFk($table,['inlb']);
            $table->foreign('in_areaindi_id','inlb_fk4')->references('id')->on('in_areaindis');
            $table->foreign('in_linea_base_id','inlb_fk5')->references('id')->on('in_linea_bases');
            $table->unique(['in_areaindi_id','in_linea_base_id'],'inlb_un1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_indicador_in_linebase');
    }
}
