<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresoTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egreso_telefonos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('egreso_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('egreso_id')->references('id')->on('s_egresos');
            $table->date('fechareg')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('tipollama_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('tipollama_id')->references('id')->on('parametros');
            $table->longText('obserllamad',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('motivollama_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('motivollama_id')->references('id')->on('parametros');
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
        Schema::dropIfExists('egreso_telefonos');
    }
}
