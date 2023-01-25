<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiag360sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diag360s', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('numdiag')->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->date('fecha')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table->integer('upiori_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upiori_id')->references('id')->on('sis_depens');
            $table->integer('certif_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('certif_id')->references('id')->on('parametros');
            $table->string('numficha', 200)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->integer('tipodg_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('tipodg_id')->references('id')->on('parametros');
            $table->integer('faseac_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('faseac_id')->references('id')->on('parametros');
            $table->integer('usermed_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('usermed_id')->references('id')->on('users');
            $table->integer('userpsi_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('userpsi_id')->references('id')->on('users');
            $table->integer('userart_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('userart_id')->references('id')->on('users');
            $table->longText('conceptorbd',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('conceptomac',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('conceptolab',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('recomendaci',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
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
        Schema::dropIfExists('diag360s');
    }
}
