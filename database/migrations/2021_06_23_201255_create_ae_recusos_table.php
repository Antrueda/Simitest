<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeRecusosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ae_recusos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ae_encuentro_id')->comment('ID DEL ACTA DE ENCUENTRO');
            $table->unsignedBigInteger('ag_recurso_id')->comment('ID DEL RECURSO');
            $table->unsignedBigInteger('sis_esta_id')->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->unsignedBigInteger('user_crea_id')->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->unsignedBigInteger('user_edita_id')->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('ae_encuentro_id')->references('id')->on('ae_encuentros');
            // $table->foreign('ag_recurso_id')->references('id')->on('ag_recursos');
            // $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            // $table->foreign('user_crea_id')->references('id')->on('users');
            // $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ae_recusos');
    }
}
