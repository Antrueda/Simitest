<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_centros', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('centro_id')->nullable()->unsigned()->comment('ID CENTRO ZONAL');
            $table->foreign('centro_id')->references('id')->on('centro_zonals');
            $table->integer('censec_id')->nullable()->unsigned()->comment('ID CENTRO ZONAL SECUNDARIO');
            $table->foreign('censec_id')->references('id')->on('centro_zosecs');
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
        Schema::dropIfExists('asignar_centros');
    }
}
