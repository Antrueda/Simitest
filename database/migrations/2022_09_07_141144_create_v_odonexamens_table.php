<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVOdonexamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_odonexamens', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('odonto_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('odonto_id')->references('id')->on('v_odontologias');
            $table->integer('labios_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('labios_id')->references('id')->on('parametros');
            $table->integer('lengua_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('lengua_id')->references('id')->on('parametros');
            $table->integer('pisob_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('pisob_id')->references('id')->on('parametros');
            $table->integer('paladar_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('paladar_id')->references('id')->on('parametros');
            $table->integer('mucosa_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('mucosa_id')->references('id')->on('parametros');
            $table->longText('descripcion')->nullable()->comment('OBSERVACION DE LA SALIDA');
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
        Schema::dropIfExists('v_odonexamens');
    }
}
