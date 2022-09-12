<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVOdonantecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_odonanteces', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('trata_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('trata_id')->references('id')->on('parametros');
            $table->integer('alergia_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('alergia_id')->references('id')->on('parametros');
            $table->integer('sangra_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('sangra_id')->references('id')->on('parametros');
            $table->integer('anemia_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('anemia_id')->references('id')->on('parametros');
            $table->integer('gestia_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('gestia_id')->references('id')->on('parametros');
            $table->integer('fuma_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('fuma_id')->references('id')->on('parametros');
            $table->integer('cardio_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('cardio_id')->references('id')->on('parametros');
            $table->integer('herpes_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('herpes_id')->references('id')->on('parametros');
            $table->integer('encia_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('encia_id')->references('id')->on('parametros');
            
            $table->integer('cardio_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('cardio_id')->references('id')->on('parametros');
            $table->integer('herpes_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('herpes_id')->references('id')->on('parametros');
            $table->integer('encia_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('encia_id')->references('id')->on('parametros');

            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('v_odonanteces');
    }
}
