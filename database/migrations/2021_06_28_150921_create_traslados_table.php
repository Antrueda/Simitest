<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasladosTable extends Migration
{
    private $tablaxxx = 'traslados';
    /**
     * Run the migrations.
     *
     * @return void
     */
    //
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->nullable()->comment('FECHA QUE RETORNA EL NNA');
            $table->longText('observaciones')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('remision_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('tipotras_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('trasladototal')->nullable()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('prm_trasupi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('prm_serv_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('user_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('cuid_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('auxe_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('doce_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('psico_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('auxil_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('respone_id')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('responr_id')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->foreign('respone_id')->references('id')->on('users');
            $table->foreign('responr_id')->references('id')->on('users');
            $table->foreign('cuid_doc')->references('id')->on('users');
            $table->foreign('auxe_doc')->references('id')->on('users');
            $table->foreign('doce_doc')->references('id')->on('users');
            $table->foreign('psico_doc')->references('id')->on('users');
            $table->foreign('auxil_doc')->references('id')->on('users');
            $table->foreign('user_doc')->references('id')->on('users');
            $table->foreign('remision_id')->references('id')->on('parametros');
            $table->foreign('tipotras_id')->references('id')->on('parametros');
            $table->foreign('prm_upi_id')->references('id')->on('sis_depens');
            $table->foreign('prm_trasupi_id')->references('id')->on('sis_depens');
            $table->foreign('prm_serv_id')->references('id')->on('sis_servicios');
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
        Schema::dropIfExists($this->tablaxxx);
    }
}

