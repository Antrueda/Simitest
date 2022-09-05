<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentroZosecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_zosecs', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre', 200)->comment('NOMBRE DE CENTRO ZONAL');
            $table->integer('estusuario_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
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
        Schema::dropIfExists('centro_zosecs');
    }
}
