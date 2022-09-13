<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguiJuridicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segui_juridicos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table->integer('estadocaso')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('estadocaso')->references('id')->on('parametros');
            $table->integer('casojur_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('casojur_id')->references('id')->on('caso_jurs');
            $table->integer('tipoc_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('tipoc_id')->references('id')->on('tipo_casos');
            $table->integer('temac_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->foreign('temac_id')->references('id')->on('tema_casos');
            $table->integer('segui_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->foreign('segui_id')->references('id')->on('seguimiento_casos');
            $table->integer('prm_sujeto')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('prm_sujeto')->references('id')->on('parametros');
            $table->string('num_sim', 15)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->integer('centro_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('centro_id')->references('id')->on('centro_zonals');
            $table->integer('censec_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('censec_id')->references('id')->on('centro_zosecs');
            $table->text('descripcion',4000)->nullable()->comment('DESCRIPCION DEL ESTADO DE MATRICULA');
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
        Schema::dropIfExists('segui_juridicos');
    }
}
