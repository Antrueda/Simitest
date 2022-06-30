<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsmedicinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_vsmedicinas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->comment('FECHA DILIGENCIAMIENTO DE LA ENTREVISTA');
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table->integer('upiorigen_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->integer('afili_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('consul_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('modal_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('entidad_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('poblaci_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('remigen_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('remisal_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('remiint_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('remiesp_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('certifi_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('remico_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->longText('motivoval')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('recomenda')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vsmedicinas');
    }
}
