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
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->time('hora_salida');
            $table->string('primer_apellido', 120);
            $table->string('segundo_apellido', 120)->nullable();;
            $table->string('primer_nombre', 120);
            $table->string('segundo_nombre', 120)->nullable();;
            $table->integer('prm_doc_id')->unsigned();
            $table->string('documento', 10);
            $table->integer('prm_parentezco_id')->unsigned();
            $table->integer('prm_autorizado_id')->unsigned();
            $table->string('ape1_autorizado', 120)->nullable();
            $table->string('ape2_autorizado', 120)->nullable();
            $table->string('nom1_autorizado', 120)->nullable();
            $table->string('nom2_autorizado', 120)->nullable();
            $table->integer('prm_doc2_id')->unsigned()->nullable();
            $table->string('doc_autorizado', 10)->nullable();
            $table->integer('prm_parentezco2_id')->unsigned()->nullable();
            $table->integer('prm_carta_id')->unsigned()->nullable();
            $table->integer('prm_copiaDoc_id')->unsigned()->nullable();
            $table->integer('prm_copiaDoc2_id')->unsigned()->nullable();
            $table->longText('descripcion');
            $table->longText('objetos');
            $table->integer('prm_upi2_id')->unsigned();
            $table->Integer('tiempo');
            $table->string('novedad', 120)->nullable();
            $table->string('dir_salida', 120);
            $table->string('tel_contacto', 10);
            $table->longText('causa')->nullable();
            $table->string('nombres_recoge', 120);
            $table->string('doc_recoge', 120);
            $table->integer('responsable')->unsigned();
            $table->integer('user_doc1_id')->unsigned();
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
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
            $table->integer('parametro_id')->unsigned();
            $table->integer('ai_salida_menores_id')->unsigned();
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('ai_salida_menores_id')->references('id')->on('ai_salida_menores');
            $table->unique(['parametro_id', 'ai_salida_menores_id'],'asameo_un1');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE OBJETIVOS DE LA SALIDA DEL MENOR DE EDAD, ACCIONES INDIVIDUALES'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_condicion_id')->unsigned();
            $table->integer('prm_orientado_id')->unsigned();
            $table->integer('prm_enfermerd_id')->unsigned();
            $table->integer('prm_brotes_id')->unsigned();
            $table->integer('prm_laceracio_id')->unsigned();
            $table->integer('ai_salida_menores_id')->unsigned();
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
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
