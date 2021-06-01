<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInAreaIndisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_areaindis', function (Blueprint $table) {
            $table->id();
            $table->integer('in_indicador_id')->unsigned()->comment('INDICADOR');
            $table->integer('area_id')->unsigned()->comment('AREA');
            $table = CamposMagicos::magicosFk($table,['arin']);
            $table->foreign('in_indicador_id','arin_fk4')->references('id')->on('in_indicadors');
            $table->foreign('area_id','arin_fk5')->references('id')->on('areas');
            $table->unique(['area_id','in_indicador_id'],'arin_un1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_in_indicador');
    }
}
