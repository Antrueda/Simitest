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
            $table->date('fechapro_inicio')->nullable()->comment('FECHA DE INICIO');
            $table->date('fechapro_final')->nullable()->comment('FECHA DE FINAL');
            
            $table->integer('novedad_id')->nullable()->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('novedad_id')->references('id')->on('parametros');
            $table->integer('modalidad_id')->nullable()->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('modalidad_id')->references('id')->on('parametros');
            $table->integer('inconve_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('inconve_id')->references('id')->on('inscri_conves');
            $table->date('fechainactivo')->nullable()->comment('FECHA DE DILIGENCIAMIENTO');
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
