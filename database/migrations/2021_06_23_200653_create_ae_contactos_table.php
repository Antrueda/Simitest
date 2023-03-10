<?php

use App\CamposMagicos\CamposMagicos;
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
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_encuentro_id')->unsigned()->comment('ID DEL ACTA DE ENCUENTRO');
            $table->string('nombres_apellidos');
            $table->integer('sis_entidad_id')->unsigned()->comment('ID DE LA ENTIDAD');
            $table->string('cargo');
            $table->string('phone');
            $table->string('email');
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ae_encuentro_id')->references('id')->on('ae_encuentros');
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_ae_contactos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_encuentro_id')->unsigned()->comment('ID AEENCUENTRO');
            $table->string('nombres_apellidos');
            $table->integer('sis_entidad_id')->unsigned()->comment('ID DE LA ENTIDAD');
            $table->string('cargo');
            $table->string('phone');
            $table->string('email');
            $table->foreign('ae_encuentro_id')->references('id')->on('ae_encuentros');
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
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
        Schema::dropIfExists('ae_contactos');
        Schema::dropIfExists('h_ae_contactos');
    }
}
