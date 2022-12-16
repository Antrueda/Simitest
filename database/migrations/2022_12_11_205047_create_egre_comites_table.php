<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgreComitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egre_comites', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fechaegreso')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('motivo_egreso')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('motivo_egreso')->references('id')->on('parametros');
            $table->integer('upiegreso_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upiegreso_id')->references('id')->on('sis_depens');
            $table->date('fechareunion')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->string('numacta', 100)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->integer('cierreca_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('cierreca_id')->references('id')->on('parametros');
            $table->integer('motivo_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('motivo_id')->references('id')->on('parametros');
            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('egre_comites');
    }
}
