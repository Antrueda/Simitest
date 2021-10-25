<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametroSubareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametro_subarea', function (Blueprint $table) {
            $table->id();
            $table->integer('area_parametro_id')->unsigned()->comment('ID DE LA TABLA PIVOTE AREA_PARAMETRO: ID CORRESPONDIENTE AL PARAMETRO PADRE');
            $table->integer('prm_subajuste_id')->unsigned()->comment('ID DE LA TABLA PARAMETROS: ID CORRESPONDIENTE AL PARAMETRO HIJO');
            $table->foreign('area_parametro_id')->references('id')->on('AREA_PARAMETRO');
            $table->foreign('prm_subajuste_id')->references('id')->on('PARAMETROS');
            $table = CamposMagicos::magicos($table);
            $table->unique(['area_parametro_id', 'prm_subajuste_id'], 'parametro_subarea_pa_ps_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametro_subarea');
    }
}
