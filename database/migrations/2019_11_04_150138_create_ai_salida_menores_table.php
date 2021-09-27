<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAiSalidaMenoresTable extends Migration
{
    private $tablaxxx = 'ai_salida_menores';
    private $tablaxxx2 = 'ai_salida_menores_obj';
    private $tablaxxx3 = 'ai_salida_menores_con';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->date('fecha')->comment('CAMPO FECHA DE DILIGENCIAMIENTO');
            $table->timestamp('hora_salida')->comment('CAMPO HORA DE SALIDA');
            $table->string('primer_apellido', 120)->comment('CAMPO PRIMER APELLIDO');
            $table->string('segundo_apellido', 120)->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('primer_nombre', 120)->comment('CAMPO PRIMER NOMBRE');
            $table->string('segundo_nombre', 120)->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->integer('prm_doc_id')->unsigned()->comment('CAMPO TIPO DE DOCUMENTO');
            $table->string('documento', 10)->comment('CAMPO NUMERO DE DOCUMENTO');
            $table->integer('prm_parentezco_id')->unsigned()->comment('CAMPO PARAMETRO DE PARENTESCO');
            $table->integer('prm_autorizado_id')->unsigned()->comment('CAMPO PARAMETRO AUTORIZADO');
            $table->string('ape1_autorizado', 120)->nullable()->comment('CAMPO PRIMER APELLIDO PERSONA AUTORIZADA');
            $table->string('ape2_autorizado', 120)->nullable()->comment('CAMPO SEGUNDO APELLIDO PERSONA AUTORIZADA');
            $table->string('nom1_autorizado', 120)->nullable()->comment('CAMPO PRIMER NOMBRE PERSONA AUTORIZADA');
            $table->string('nom2_autorizado', 120)->nullable()->comment('CAMPO SEGUNDO NOMBRE PERSONA AUTORIZADA');
            $table->integer('prm_doc2_id')->unsigned()->nullable()->comment('CAMPO TIPO DE DOCUMENTO AUTORIZADO');
            $table->string('doc_autorizado', 10)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO AUTORIZADO');
            $table->integer('prm_parentezco2_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PARENTESCO DE PERSONA AUTORIZADA');
            $table->integer('prm_carta_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CARTA');
            $table->integer('prm_copiaDoc_id')->unsigned()->nullable()->comment('CAMPO COPIA DEL DOCUMENTO');
            $table->integer('prm_copiaDoc2_id')->unsigned()->nullable()->comment('CAMPO FOTOCOPIA DEL DOCUMENTO');
            $table->string('descripcion')->comment('CAMPO DE TEXTO DESCRIPCION');
            $table->string('objetos')->comment('CAMPO DE TEXTO OBJETOS');
            $table->integer('prm_upi2_id')->unsigned()->comment('CAMPO DEPENDENCIA O UPI DONDE REALIZA LA SALIDA');
            $table->Integer('tiempo')->comment('CAMPO TIEMPO DE SALIDA');
            $table->string('novedad', 120)->nullable()->comment('CAMPO NOVEDAD');
            $table->string('dir_salida', 120)->comment('CAMPO DIRECCION DE SALIDA');
            $table->string('tel_contacto', 10)->comment('CAMPO TELEFONO DE CONTACTO');
            $table->string('causa')->nullable()->comment('CAMPO DE TEXTO CAUSA');
            $table->string('nombres_recoge', 120)->comment('CAMPO DE TEXTO NOMBRE DE QUIEN RECOGE');
            $table->string('doc_recoge', 120)->comment('CAMPO DE TEXTO DOCUMENTO DE QUIEN RECOGE');
            $table->integer('responsable')->unsigned()->comment('CAMPO ID RESPONSABLE DE LA UPI');
            $table->integer('user_doc1_id')->unsigned()->comment('CAMPO ID DILIGENCIA EL FOMULARIO');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('sis_depens');
            $table->foreign('prm_doc_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->foreign('prm_autorizado_id')->references('id')->on('parametros');
            $table->foreign('prm_doc2_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco2_id')->references('id')->on('parametros');
            $table->foreign('prm_carta_id')->references('id')->on('parametros');
            $table->foreign('prm_copiaDoc_id')->references('id')->on('parametros');
            $table->foreign('prm_copiaDoc2_id')->references('id')->on('parametros');
            $table->foreign('prm_upi2_id')->references('id')->on('sis_depens');
            $table->foreign('responsable')->references('id')->on('users');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA DESCRIPCIÓN DE LA SALIDA DEL MENOR DE EDAD DE LOS SERVICIOS DE UNA UPI INDICANDO LOS DATOD BASICOS DE IDENTIFICACIÓN Y DE CONTACTO DEL ADULTO RESPONSABLE, ACCIONES INDIVIDUALES'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->integer('parametro_id')->unsigned()->comment('PARAMETRO OBJETIVOS DE SALIDA');
            $table->integer('ai_salida_menores_id')->unsigned()->comment('ID DE SALIDA DE MENORES');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('ai_salida_menores_id')->references('id')->on('ai_salida_menores');
            $table->unique(['parametro_id', 'ai_salida_menores_id'],'asameo_un1');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE OBJETIVOS DE LA SALIDA DEL MENOR DE EDAD, ACCIONES INDIVIDUALES'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_condicion_id')->unsigned()->comment('PARAMETRO CONDICION');
            $table->integer('prm_orientado_id')->unsigned()->comment('PARAMETRO ORIENTADO');
            $table->integer('prm_enfermerd_id')->unsigned()->comment('PARAMETRO ENFERMO');
            $table->integer('prm_brotes_id')->unsigned()->comment('PARAMETRO BROTES');
            $table->integer('prm_laceracio_id')->unsigned()->comment('PARAMETRO LACERACIONES');
            $table->integer('ai_salida_menores_id')->unsigned()->comment('ID DE SALIDA DE MENORES');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('prm_condicion_id')->references('id')->on('parametros');
            $table->foreign('prm_orientado_id')->references('id')->on('parametros');
            $table->foreign('prm_enfermerd_id')->references('id')->on('parametros');
            $table->foreign('prm_brotes_id')->references('id')->on('parametros');
            $table->foreign('prm_laceracio_id')->references('id')->on('parametros');
            $table->foreign('ai_salida_menores_id')->references('id')->on('ai_salida_menores');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE CONDICIONES DE SALIDA DEL MENOR DE EDAD, ACCIONES INDIVIDUALES'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
