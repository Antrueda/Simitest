<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionamientosTable extends Migration
{
    private $tablaxxx = 'direccionamientos';
    private $tablaxxx2 = 'direccion_inst';
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
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('tipo_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
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
            $table = CamposMagicos::getForeign($table, 'prm_discapacidad_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_cuentadisc_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_condicion_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_certifica_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_cabeza_id', 'parametros');
            $table->integer('departamento_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('municipio_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE MUNICIPIO');
            $table->foreign('departamento_cond_id')->references('id')->on('sis_departams');
            $table->foreign('municipio_cond_id')->references('id')->on('sis_municipios');
            $table->integer('prm_docuaco_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('primer_nombreaco')->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table->string('segundo_nombreaco')->nullable()->comment('CAMPO SEGUNDO NOMBRE ACOMPAÑANTE');
            $table->string('primer_apellidoaco')->comment('CAMPO PRIMER APELLIDO ACOMPAÑANTE');
            $table->string('segundo_apellidoaco')->nullable()->comment('CAMPO SEGUNDO APELLIDO ACOMPAÑANTE');
            $table->string('documentoaco')->comment('CAMPO NUMERO DE DOCUMENTO ACOMPAÑANTE');
            $table->integer('userd_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('userr_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('sis_nnaj_id')->nullable()->unsigned()->comment('CAMPO ID NNAJ');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('userd_doc')->references('id')->on('users');
            $table->foreign('userr_doc')->references('id')->on('users');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('direc_id')->unsigned()->comment('CAMPO ID DE CSD RESIDENCIA');
            $table->longText('justificacion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('inter_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('sis_serv_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('seguimiento_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('intra_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('sis_entidad_id')->nullable()->unsigned()->comment('ID DE LA ENTIDAD');
            $table->integer('ent_servicio_id')->nullable()->unsigned()->comment('ID DE LA ENTIDAD');
            $table->string('nombre_entidad')->nullable()->comment('CAMPO NOMBRE ENTIDAD');
            $table = CamposMagicos::getForeign($table, 'prm_tipoenti_id', 'parametros');
            $table->foreign('inter_id')->references('id')->on('parametros');
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('intra_id')->references('id')->on('parametros');
            $table->foreign('sis_serv_id')->references('id')->on('sis_servicios');
            $table->foreign('direc_id')->references('id')->on('direccionamientos');
            $table->foreign('ent_servicio_id')->references('id')->on('sis_entidad_sis_servicio');
            
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
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);

    }
}
