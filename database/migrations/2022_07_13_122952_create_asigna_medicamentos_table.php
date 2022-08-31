<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_medicamentos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('compuesto_id')->nullable()->unsigned()->comment('ID COMPUESTO');
            $table->foreign('compuesto_id')->references('id')->on('compuestos');
            $table->integer('presentacion_id')->nullable()->unsigned()->comment('ID PRESENTACION');
            $table->foreign('presentacion_id')->references('id')->on('presentacions');
            $table->integer('concentracion_id')->nullable()->unsigned()->comment('ID CONCENTRACION');
            $table->foreign('concentracion_id')->references('id')->on('concentracions');
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
        Schema::dropIfExists('asigna_medicamentos');
    }
}
