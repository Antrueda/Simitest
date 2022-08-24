<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAiRetornoSalidasTable extends Migration
{
    private $tablaxxx = 'ai_retosalis';
    private $tablaxxx2 = 'ai_retsalcos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO ID UPI O DEPENDECIA');
            $table->date('fecha')->comment('CAMPO FECHA DE DILIGENCIAMIENTO');
            $table->timestamp('hora_retorno')->comment('CAMPO HORA DE RETORNO');
            $table->string('descripcion',4000)->nullable()->comment('CAMPO DE TEXTO DESCRIPCION');
            $table->string('observaciones',4000)->nullable()->comment('CAMPO DE TEXTO OBSERVACIONES');
            $table->string('nombres_retorna', 120)->nullable()->comment('CAMPO DE TEXTO NOMBRE');
            $table->integer('prm_doc_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DOCUMENTO');
            $table->string('doc_retorna', 12)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO');
            $table->integer('prm_parentezco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO PARENTESCO');
            $table->integer('responsable')->unsigned()->comment('CAMPO RESPONSABLE DE LA UPI O DEPENDENCIA');
            $table->integer('user_doc1_id')->unsigned()->comment('CAMPO ID DE PERSONA QUE DILIGENCIA');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('sis_depens');
            $table->foreign('prm_doc_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->foreign('responsable')->references('id')->on('users');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DEL RETORNO DE UN ESCAPE DE UN BENEFICIARIO DE LOS SERVICIOS DE IDIPRON DE UNA UPI DENTRO DE LAS ACCIONES GRUPALES'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_condicion_id')->unsigned()->comment('PARAMETRO CONDICION');
            $table->integer('prm_orientado_id')->unsigned()->comment('PARAMETRO ORIENTADO');
            $table->integer('prm_enfermerd_id')->unsigned()->comment('PARAMETRO ENFERMO');
            $table->integer('prm_brotes_id')->unsigned()->comment('PARAMETRO BROTES');
            $table->integer('prm_laceracio_id')->unsigned()->comment('PARAMETRO LACERACIONES');
            $table->integer('ai_retorno_salida_id')->unsigned()->comment('ID RETORNO DE SALIDA');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('prm_condicion_id')->references('id')->on('parametros');
            $table->foreign('prm_orientado_id')->references('id')->on('parametros');
            $table->foreign('prm_enfermerd_id')->references('id')->on('parametros');
            $table->foreign('prm_brotes_id')->references('id')->on('parametros');
            $table->foreign('prm_laceracio_id')->references('id')->on('parametros');
            $table->foreign('ai_retorno_salida_id')->references('id')->on('ai_retosalis');
            $table->timestamps();
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA DE FORMA PARAMETRIZADA LOS PORMENORESDE LA CONDICION DE LLEGADA DE UN BENEFICIARIO DE LOS SERVICIOS DE IDIPRON DE UNA UPI DENTRO DE LAS ACCIONES GRUPALES'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
