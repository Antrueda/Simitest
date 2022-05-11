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
        Schema::create('vsmedicinas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('afili_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('afili_id')->references('id')->on('parametros');
            $table->integer('entidad_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('entidad_id')->references('id')->on('parametros');
            $table->integer('poblaci_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('poblaci_id')->references('id')->on('parametros');
            $table->integer('remigen_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('remigen_id')->references('id')->on('parametros');
            $table->integer('remisal_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('remisal_id')->references('id')->on('parametros');
            $table->integer('remiint_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('remiint_id')->references('id')->on('remisions');
            $table->integer('remiint_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('remiint_id')->references('id')->on('remiespecials');
            $table->integer('certifi_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('certifi_id')->references('id')->on('parametros');
            $table->longText('motivoval')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('recomenda')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
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
        Schema::dropIfExists('vsmedicinas');
    }
}
