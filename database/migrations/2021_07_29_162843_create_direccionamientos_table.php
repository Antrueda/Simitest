<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionamientosTable extends Migration
{
    private $tablaxxx = 'direccionamientos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->nullable()->comment('FECHA QUE RETORNA EL NNA');
            $table->longText('justificacion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('tipo_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('seguimiento_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('intra_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('s_primer_nombre')->comment('CAMPO PRIMER NOMBRE');
            $table->string('s_segundo_nombre')->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->string('s_primer_apellido')->comment('CAMPO PRIMER APELLIDO');
            $table->string('s_segundo_apellido')->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('s_nombre_identitario')->nullable()->comment('CAMPO DE NOMBRE IDENTITARIO');
            $table->string('apodo')->nullable()->comment('CAMPO DE NOMBRE IDENTITARIO');
            $table->string('s_documento')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table = CamposMagicos::getForeign($table, 'prm_tipodocu_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'sis_municipio');
            $table = CamposMagicos::getForeign($table, 'prm_sexo_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_identidad_genero_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_orientacion_sexual_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_etnia_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_poblacion_etnia_id', 'parametros');
            $table->integer('prm_docuaco_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('primer_nombreaco')->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table->string('segundo_nombreaco')->nullable()->comment('CAMPO SEGUNDO NOMBRE ACOMPAÑANTE');
            $table->string('primer_apellidoaco')->comment('CAMPO PRIMER APELLIDO ACOMPAÑANTE');
            $table->string('segundo_apellidoaco')->nullable()->comment('CAMPO SEGUNDO APELLIDO ACOMPAÑANTE');
            $table->string('documentoaco')->comment('CAMPO NUMERO DE DOCUMENTO ACOMPAÑANTE');
            $table->integer('userd_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('userr_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('respone_id')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->foreign('respone_id')->references('id')->on('users');
            $table->foreign('userd_doc')->references('id')->on('users');
            $table->foreign('userr_doc')->references('id')->on('users');
            $table->foreign('tipo_id')->references('id')->on('parametros');
            $table->foreign('intra_id')->references('id')->on('parametros');
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
