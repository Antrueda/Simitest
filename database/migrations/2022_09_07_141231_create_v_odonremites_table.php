<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVOdonremitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_odonremites', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('odonto_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('odonto_id')->references('id')->on('v_odontologias');
            $table->integer('remigen_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('remigen_id')->references('id')->on('parametros');
            $table->integer('remisal_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('remisal_id')->references('id')->on('parametros');
            $table->integer('remiint_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('remiint_id')->references('id')->on('remisions');
            $table->longText('observacion',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('evolucion',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
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
        Schema::dropIfExists('v_odonremites');
    }
}
