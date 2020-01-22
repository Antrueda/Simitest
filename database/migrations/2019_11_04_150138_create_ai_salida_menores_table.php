<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAiSalidaMenoresTable extends Migration{
    
    public function up(){
        Schema::create('ai_salida_menores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->time('hora_salida');
            $table->bigInteger('prm_hor_sal_id')->unsigned();
            $table->string('primer_apellido', 120);
            $table->string('segundo_apellido',120);
            $table->string('primer_nombre',120);
            $table->string('segundo_nombre',120);
            $table->bigInteger('prm_doc_id')->unsigned();
            $table->string('documento',10);
            $table->bigInteger('prm_parentezco_id')->unsigned();
            $table->bigInteger('prm_autorizado_id')->unsigned();
            $table->string('ape1_autorizado',120)->nullable();
            $table->string('ape2_autorizado',120)->nullable();
            $table->string('nom1_autorizado',120)->nullable();
            $table->string('nom2_autorizado',120)->nullable();
            $table->bigInteger('prm_doc2_id')->unsigned()->nullable();
            $table->string('doc_autorizado',10)->nullable();
            $table->bigInteger('prm_parentezco2_id')->unsigned()->nullable();
            $table->bigInteger('prm_carta_id')->unsigned()->nullable();
            $table->bigInteger('prm_copiaDoc_id')->unsigned()->nullable();
            $table->bigInteger('prm_copiaDoc2_id')->unsigned()->nullable();
            $table->string('descripcion',4000);
            $table->string('objetos',4000);
            $table->bigInteger('prm_upi2_id')->unsigned();
            $table->Integer('tiempo');
            $table->string('novedad',120);
            $table->string('dir_salida',120);
            $table->string('tel_contacto',10);
            $table->string('causa',4000)->nullable();
            $table->string('nombres_recoge',120);
            $table->string('doc_recoge',120);
            $table->bigInteger('responsable')->unsigned();
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('sis_dependencias');
            $table->foreign('prm_hor_sal_id')->references('id')->on('parametros');
            $table->foreign('prm_doc_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->foreign('prm_autorizado_id')->references('id')->on('parametros');
            $table->foreign('prm_doc2_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco2_id')->references('id')->on('parametros');
            $table->foreign('prm_carta_id')->references('id')->on('parametros');
            $table->foreign('prm_copiaDoc_id')->references('id')->on('parametros');
            $table->foreign('prm_copiaDoc2_id')->references('id')->on('parametros');
            $table->foreign('prm_upi2_id')->references('id')->on('sis_dependencias');
            $table->foreign('responsable')->references('id')->on('users');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('ai_salida_menores_obj', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('ai_salida_menores_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('ai_salida_menores_id')->references('id')->on('ai_salida_menores');
            $table->unique(['parametro_id', 'ai_salida_menores_id']);
            
        });

        Schema::create('ai_salida_menores_con', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prm_id')->unsigned();
            $table->bigInteger('ai_salida_menores_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('prm_id')->references('id')->on('parametros');
            $table->foreign('ai_salida_menores_id')->references('id')->on('ai_salida_menores');
            $table->unique(['id', 'prm_id', 'ai_salida_menores_id']);
            
        });
    }

    public function down(){
        Schema::dropIfExists('ai_salida_menores_con');
        Schema::dropIfExists('ai_salida_menores_obj');
        Schema::dropIfExists('ai_salida_menores');
    }
}
