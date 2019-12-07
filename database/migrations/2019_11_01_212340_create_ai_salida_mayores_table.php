<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAiSalidamayoresTable extends Migration{

    public function up(){
        Schema::create('ai_salida_mayores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->date('fecha');
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->text('descripcion',4000);
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('sis_dependencias');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
            
        Schema::create('ai_salida_mayores_razones', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('ai_salmay_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->engine = 'InnoDB';
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('ai_salmay_id')->references('id')->on('ai_salida_mayores');
            $table->unique(['parametro_id', 'ai_salmay_id']);
        });
    }

    public function down(){
        Schema::dropIfExists('ai_salida_mayores_razones');
        Schema::dropIfExists('ai_salida_mayores');
    }
}
