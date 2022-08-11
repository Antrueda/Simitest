<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasoJursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caso_jurs', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->string('doc_autorizado', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->integer('tipoc_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('tipoc_id')->references('id')->on('tipo_casos');
            $table->integer('temac_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->foreign('temac_id')->references('id')->on('tema_casos');
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table->integer('prm_solicita_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('prm_solicita_id')->references('id')->on('parametros');
            $table->integer('prm_parentezco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PARENTESCO');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->integer('prm_rama_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO AUTORIZADO');
            $table->foreign('prm_rama_id')->references('id')->on('parametros');
            $table->string('num_proceso', 21)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->integer('prm_juzgado')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('prm_juzgado')->references('id')->on('parametros');
            $table->integer('sis_nnaj_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->string('telfapo', 15)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->string('telfapo2', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->string('correoapo', 500)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->integer('prm_sujeto')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('prm_sujeto')->references('id')->on('parametros');
            $table->text('consultaca',4000)->nullable()->comment('DESCRIPCION DEL ESTADO DE MATRICULA');
            $table->text('asesoriaca',4000)->nullable()->comment('DESCRIPCION DEL ESTADO DE MATRICULA');
            $table->integer('estacaso')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('estacaso')->references('id')->on('parametros');
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
        Schema::dropIfExists('caso_jurs');
    }
}
