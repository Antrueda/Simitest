<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresoDeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egreso_deres', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table->integer('custo_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('custo_id')->references('id')->on('parametros');
            $table->integer('parent_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('parent_id')->references('id')->on('parametros');
            $table->string('nom1_autorizado', 200)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->string('nom2_autorizado', 200)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->string('ape1_autorizado', 200)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->string('ape2_autorizado', 200)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->string('telefonopare', 200)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->integer('egreso_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('egreso_id')->references('id')->on('s_egresos');    
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
        Schema::dropIfExists('egreso_deres');
    }
}
