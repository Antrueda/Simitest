<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiRazonesTable extends Migration
{
    private $tablaxxx = 'fi_razones';
    private $tablaxxx2 = 'fi_documentos_anexas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->text('s_porque_ingresar')->comment('CAMPO DE TEXTO POR QUE QUIERE INGRESAR');
            $table->integer('userd_id')->unsigned()->comment('CAMPO ID USUARIO QUE DILIGENCIA');
            $table->integer('sis_depend_id')->unsigned()->comment('CAMPO ID UPI O DEPENDENCIA');
            $table->integer('userr_id')->unsigned()->comment('CAMPO ID USUARIO RESPONSABLE');
            $table->integer('sis_depenr_id')->unsigned()->comment('CAMPO UPI RESPONSABLE');
            $table->integer('i_prm_estado_ingreso_id')->unsigned()->comment('CAMPO PARAMETRO ESTADO DE INGRESO');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->foreign('userd_id')->references('id')->on('users');
            $table->foreign('userr_id')->references('id')->on('users');
            $table->foreign('sis_depend_id')->references('id')->on('sis_depens');
            $table->foreign('sis_depenr_id')->references('id')->on('sis_depens');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_estado_ingreso_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE REGISTRA LAS RAZONES DE INGRESO AL IDIPRON, SECCION 15 BIENVENIDA DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('i_prm_documento_id')->unsigned();

            $table->text('s_ruta');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_documento_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE REGISTRA LOS DOCUMENTOS ANEXOS ASOCIADOS AL NNAJ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
