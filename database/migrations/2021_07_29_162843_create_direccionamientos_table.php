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
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('area_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('tipo_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('s_primer_nombre')->comment('CAMPO PRIMER NOMBRE');
            $table->string('s_segundo_nombre')->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->string('s_primer_apellido')->comment('CAMPO PRIMER APELLIDO');
            $table->string('s_segundo_apellido')->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('s_nombre_identitario')->nullable()->comment('CAMPO DE NOMBRE IDENTITARIO');
            $table->string('apodo')->nullable()->comment('CAMPO DE NOMBRE IDENTITARIO');
            $table->string('s_documento')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table->date('d_nacimiento')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table = CamposMagicos::getForeign($table, 'prm_tipodocu_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'sis_pai');
            $table = CamposMagicos::getForeign($table, 'sis_departam');
            $table = CamposMagicos::getForeign($table, 'sis_municipio');
            $table = CamposMagicos::getForeign($table, 'prm_sexo_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_identidad_genero_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_orientacion_sexual_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_etnia_id', 'parametros');
            $table = CamposMagicos::getForeignN($table, 'prm_poblacion_etnia_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_cuentadisc_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_condicion_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_cabeza_id', 'parametros');
            $table->integer('prm_certifica_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('prm_certifica_id')->references('id')->on('parametros');
            $table->integer('prm_discapacidad_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('prm_discapacidad_id')->references('id')->on('parametros');
            $table->integer('departamento_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('municipio_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE MUNICIPIO');
            $table->foreign('departamento_cond_id')->references('id')->on('sis_departams');
            $table->foreign('municipio_cond_id')->references('id')->on('sis_municipios');
            $table->integer('departamento_cert_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('municipio_cert_id')->unsigned()->nullable()->comment('CAMPO ID DE MUNICIPIO');
            $table->foreign('departamento_cert_id')->references('id')->on('sis_departams');
            $table->foreign('municipio_cert_id')->references('id')->on('sis_municipios');
            $table->integer('prm_docuaco_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('primer_nombreaco')->nullable()->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table->string('segundo_nombreaco')->nullable()->comment('CAMPO SEGUNDO NOMBRE ACOMPAÑANTE');
            $table->string('primer_apellidoaco')->nullable()->comment('CAMPO PRIMER APELLIDO ACOMPAÑANTE');
            $table->string('segundo_apellidoaco')->nullable()->comment('CAMPO SEGUNDO APELLIDO ACOMPAÑANTE');
            $table->string('documentoaco')->nullable()->comment('CAMPO NUMERO DE DOCUMENTO ACOMPAÑANTE');
            $table->integer('userd_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('userr_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('sis_nnaj_id')->nullable()->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('incompleto')->nullable()->unsigned()->comment('CAMPO ID NNAJ');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('userd_doc')->references('id')->on('users');
            $table->foreign('userr_doc')->references('id')->on('users');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table->foreign('area_id')->references('id')->on('areas');
            $table = CamposMagicos::magicos($table);
        });

        


        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->nullable()->comment('FECHA QUE RETORNA EL NNA');
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('area_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('tipo_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('s_primer_nombre')->comment('CAMPO PRIMER NOMBRE');
            $table->string('s_segundo_nombre')->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->string('s_primer_apellido')->comment('CAMPO PRIMER APELLIDO');
            $table->string('s_segundo_apellido')->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('s_nombre_identitario')->nullable()->comment('CAMPO DE NOMBRE IDENTITARIO');
            $table->string('apodo')->nullable()->comment('CAMPO DE NOMBRE IDENTITARIO');
            $table->string('s_documento')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table->date('d_nacimiento')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table = CamposMagicos::getForeign($table, 'prm_tipodocu_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'sis_pai');
            $table = CamposMagicos::getForeign($table, 'sis_departam');
            $table = CamposMagicos::getForeign($table, 'sis_municipio');
            $table = CamposMagicos::getForeign($table, 'prm_sexo_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_identidad_genero_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_orientacion_sexual_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_etnia_id', 'parametros');
            $table = CamposMagicos::getForeignN($table, 'prm_poblacion_etnia_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_cuentadisc_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_condicion_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_cabeza_id', 'parametros');
            $table->integer('prm_certifica_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('prm_discapacidad_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('departamento_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('municipio_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE MUNICIPIO');
            $table->integer('departamento_cert_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('municipio_cert_id')->unsigned()->nullable()->comment('CAMPO ID DE MUNICIPIO');
            $table->integer('prm_docuaco_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('primer_nombreaco')->nullable()->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table->string('segundo_nombreaco')->nullable()->comment('CAMPO SEGUNDO NOMBRE ACOMPAÑANTE');
            $table->string('primer_apellidoaco')->nullable()->comment('CAMPO PRIMER APELLIDO ACOMPAÑANTE');
            $table->string('segundo_apellidoaco')->nullable()->comment('CAMPO SEGUNDO APELLIDO ACOMPAÑANTE');
            $table->string('documentoaco')->nullable()->comment('CAMPO NUMERO DE DOCUMENTO ACOMPAÑANTE');
            $table->integer('userd_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('userr_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('sis_nnaj_id')->nullable()->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('incompleto')->nullable()->unsigned()->comment('CAMPO ID NNAJ');
            $table = CamposMagicos::h_magicos($table);
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
        Schema::dropIfExists('h_' . $this->tablaxxx);
    

    }
}
