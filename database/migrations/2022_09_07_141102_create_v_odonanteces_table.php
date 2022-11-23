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
            $table->integer('odonto_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('odonto_id')->references('id')->on('v_odontologias');
            $table->integer('trata_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('trata_id')->references('id')->on('parametros');
            $table->integer('alergia_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('alergia_id')->references('id')->on('parametros');
            $table->integer('coaler_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('coaler_id')->references('id')->on('parametros');
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
            $table->integer('muerde_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('muerde_id')->references('id')->on('parametros');
            $table->integer('enfactu_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('enfactu_id')->references('id')->on('parametros');
            $table->integer('hepati_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('hepati_id')->references('id')->on('parametros');
            $table->integer('tens_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('tens_id')->references('id')->on('parametros');
            $table->integer('vih_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('vih_id')->references('id')->on('parametros');
            $table->integer('fieb_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('fieb_id')->references('id')->on('parametros');
            $table->integer('asma_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('asma_id')->references('id')->on('parametros');
            $table->integer('diabe_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('diabe_id')->references('id')->on('parametros');
            $table->integer('ulcer_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('ulcer_id')->references('id')->on('parametros');
            $table->integer('toma_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('toma_id')->references('id')->on('parametros');
            $table->integer('limit_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('limit_id')->references('id')->on('parametros');
            $table->integer('apret_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('apret_id')->references('id')->on('parametros');
            $table->integer('resta_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('resta_id')->references('id')->on('parametros');
            $table->integer('respir_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('respir_id')->references('id')->on('parametros');
            $table->integer('pato_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('pato_id')->references('id')->on('parametros');
            $table->integer('tuber_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('tuber_id')->references('id')->on('parametros');
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
