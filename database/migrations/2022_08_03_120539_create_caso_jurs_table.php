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
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table->integer('upiorigen_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upiorigen_id')->references('id')->on('sis_depens');
            $table->integer('tipoc_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('tipoc_id')->references('id')->on('tipo_casos');
            $table->integer('temac_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->foreign('temac_id')->references('id')->on('tema_casos');
            $table->string('num_sim', 15)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->integer('centro_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('centro_id')->references('id')->on('centro_zonals');
            $table->integer('censec_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('censec_id')->references('id')->on('centro_zosecs');
            $table->string('doc_autorizado', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->string('ape1_autorizado', 120)->nullable()->comment('CAMPO PRIMER APELLIDO PERSONA AUTORIZADA');
            $table->string('ape2_autorizado', 120)->nullable()->comment('CAMPO SEGUNDO APELLIDO PERSONA AUTORIZADA');
            $table->string('nom1_autorizado', 120)->nullable()->comment('CAMPO PRIMER NOMBRE PERSONA AUTORIZADA');
            $table->string('nom2_autorizado', 120)->nullable()->comment('CAMPO SEGUNDO NOMBRE PERSONA AUTORIZADA');
            $table->integer('prm_doc_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('prm_doc_id')->references('id')->on('parametros');
            $table->integer('direccionauto')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->integer('telefonoauto')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->integer('sis_municipio_id')->unsigned()->nullable()->comment('CAMPO DE ID DEL MUNICIPIO');
            $table->integer('sis_upzbario_id')->unsigned()->nullable()->comment('CAMPO ID DEL BARRIO');
            
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('sis_upzbario_id')->references('id')->on('sis_upzbarris');
            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->integer('prm_solicita_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->foreign('prm_solicita_id')->references('id')->on('parametros');
            $table->integer('prm_parentezco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PARENTESCO');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->integer('prm_parensoli_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PARENTESCO');
            $table->foreign('prm_parensoli_id')->references('id')->on('parametros');
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
            $table->string('apoderado', 500)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->integer('prm_sujeto')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('prm_sujeto')->references('id')->on('parametros');
            $table->text('consultaca',4000)->nullable()->comment('DESCRIPCION DEL ESTADO DE MATRICULA');
            $table->text('asesoriaca',4000)->nullable()->comment('DESCRIPCION DEL ESTADO DE MATRICULA');
            $table->integer('estacaso')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('estacaso')->references('id')->on('parametros');
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
