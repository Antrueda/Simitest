<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAiRetornoSalidasTable extends Migration{

    public function up(){
        Schema::create('ai_retorno_salidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->time('hora_retorno');
            $table->bigInteger('prm_hor_ret_id')->unsigned();
            $table->string('descripcion',4000);
            $table->string('observaciones',4000);
            $table->string('nombres_retorna',120);
            $table->bigInteger('prm_doc_id')->unsigned();
            $table->string('doc_retorna',10);
            $table->bigInteger('prm_parentezco_id')->unsigned();
            $table->bigInteger('responsable')->unsigned();
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('sis_dependencias');
            $table->foreign('prm_hor_ret_id')->references('id')->on('parametros');
            $table->foreign('prm_doc_id')->references('id')->on('parametros');
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->foreign('responsable')->references('id')->on('users');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    public function down(){
        Schema::dropIfExists('ai_retorno_salidas');
    }
}
