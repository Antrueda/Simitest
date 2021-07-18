<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ae_contactos', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
            $table->unsignedBigInteger('ae_encuentro_id')->comment('ID DEL ACTA DE ENCUENTRO');
            $table->integer('index')->comment('INDICE DE LA TABLA EN EL FORMULARIO (0-9)');
            $table->string('nombres_apellidos');
            $table->unsignedBigInteger('sis_entidad_id')->comment('ID DE LA ENTIDAD');
            $table->string('cargo');
            $table->string('phone');
            $table->string('email');
            $table->unsignedBigInteger('sis_esta_id')->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->unsignedBigInteger('user_crea_id')->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->unsignedBigInteger('user_edita_id')->comment('PARAMETRO TIPO DE AUTORIZACION');
=======
            $table->increments('id')->start(1)->nocache();

            $table->integer('ae_encuentro_id')->unsigned()->comment('ID AEENCUENTRO');
            $table->string('nombres_apellidos');
            $table->integer('sis_entidad_id')->unsigned()->comment('ID ENTIDAD');

            $table->string('cargo');
            $table->string('phone');
            $table->string('email');
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
>>>>>>> ad110755f33326e0947262624d1a427e479f433e
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ae_encuentro_id')->references('id')->on('ae_encuentros');
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ae_contactos');
    }
}
