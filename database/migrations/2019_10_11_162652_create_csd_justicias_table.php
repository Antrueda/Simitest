<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCsdJusticiasTable extends Migration
{
    private $tablaxxx = 'csds';
    private $tablaxxx2 = 'csd_sis_nnaj';
    private $tablaxxx3 = 'csd_justicias';
    private $tablaxxx4 = 'csd_nnaj_especial';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('proposito', 93)->comment('CAMPO DE TEXTO PROPOSITO DE CONSULTA');
            $table->date('fecha')->comment('CAMPO FECHA DE DILIGENCIAMIENTO');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('ID DEL NNAJ');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS CONSULTAS EN DOMICILIO ASOCIADAS A UNA PERSONA ENTREVISTADA, CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('CAMPO PARAMETRO TIPO FUENTE');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->unique(['csd_id', 'sis_nnaj_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL NUMERO CONSECUTIVO DEL DILIGENCIAMIENTO DE UNA CONSULTA SOCIAL EN DOMICILIO Y SERVIRA PARA AGRUPAR A LAS 12 SECCIONES DE ESTE FORMATO, CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->integer('prm_vinculado_id')->unsigned()->comment('CAMPO PARAMETRO VINCULADO');
            $table->integer('prm_vin_causa_id')->unsigned()->nullable()->comment('CAMPO CAUSA DE VINCULACION');
            $table->integer('prm_riesgo_id')->unsigned()->comment('CAMPO RIESGO DE PARTICIPAR EN ACTOS DELICTIVOS');
            $table->integer('prm_rie_causa_id')->unsigned()->nullable()->comment('CAMPO INDICAR RIESGO');

            $table->integer('prm_tipofuen_id')->unsigned()->comment('CAMPO PARAMETRO TIPO FUENTE');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_vinculado_id')->references('id')->on('parametros');
            $table->foreign('prm_vin_causa_id')->references('id')->on('parametros');
            $table->foreign('prm_riesgo_id')->references('id')->on('parametros');
            $table->foreign('prm_rie_causa_id')->references('id')->on('parametros');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA JUSTICIA RESTAURATIVA DE LA PERSONA ENTEVISTADA, SECCION 4 JUSTICIA RESTAURATIVA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO SITUACION ESPECIAL');
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('CAMPO PARAMETRO TIPO FUENTE');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE RELACIONA LA PERSONA ENTREVISTADA CON EL NUMERO CONSECUTIVO DE DILIGENCIAMIENTO DE UNA CONSULTA SOCIAL EN DOMICILIO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
