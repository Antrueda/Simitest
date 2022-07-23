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
            $table->integer('medi_id')->nullable()->unsigned()->comment('ID MEDICAMENTOS');
            $table->foreign('medi_id')->references('id')->on('medicamentos');
            $table->integer('comp_id')->nullable()->unsigned()->comment('ID COMPUESTO');
            $table->foreign('comp_id')->references('id')->on('compuestos');
            $table->integer('pres_id')->nullable()->unsigned()->comment('ID PRESENTACION');
            $table->foreign('pres_id')->references('id')->on('presentacions');
            $table->integer('conc_id')->nullable()->unsigned()->comment('ID CONCENTRACION');
            $table->foreign('conc_id')->references('id')->on('concentracions');
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
