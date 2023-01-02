<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConveNnajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conve_nnajs', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->integer('etapa_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('etapa_id')->references('id')->on('parametros');
            $table->date('fechapro_inicio')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->date('fechapro_final')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('novedad_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('novedad_id')->references('id')->on('parametros');
            $table->date('fechainactivo')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->longText('observaciones',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
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
        Schema::dropIfExists('conve_nnajs');
    }
}
