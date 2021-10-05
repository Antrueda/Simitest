<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasladoNnajsTable extends Migration
{
    private $tablaxxx = 'traslado_nnajs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('traslado_id')->unsigned()->comment('ID DE LA TRASLADO');
            $table->integer('sis_nnaj_id')->unsigned()->comment('ID DEL NNAJ');
            $table->integer('motivoe_id')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('motivoese_id')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->string('observaciones',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->foreign('motivoe_id')->references('id')->on('parametros');
            $table->foreign('motivoese_id')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('traslado_id')->references('id')->on('traslados');
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
        Schema::dropIfExists($this->tablaxxx);
    }
}
