<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametroAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_parametro', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_atencion_id')->unsigned()->comment('ID DE LA TABLA PARAMETROS: ID CORRESPONDIENTE AL PARAMETRO PADRE');
            $table->integer('prm_area_id')->unsigned()->comment('ID DE LA TABLA PARAMETROS: ID CORRESPONDIENTE AL PARAMETRO HIJO');
            $table->foreign('prm_atencion_id')->references('id')->on('PARAMETROS');
            $table->foreign('prm_area_id')->references('id')->on('PARAMETROS');
            $table = CamposMagicos::magicos($table);
            $table->unique(['prm_atencion_id', 'prm_area_id'], 'area_parametro_uk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametro_area');
    }
}
