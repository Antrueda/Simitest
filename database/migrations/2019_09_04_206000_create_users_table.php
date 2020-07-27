<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('email')->unique();
            $table->string('s_telefono');
            $table->string('s_matriculap');
            $table->string('s_documento');

            $table->date('d_vinculacion');
            $table->Integer('itiestan')->default(0);
            $table->Integer('itiegabe')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_cargo_id')->unsigned();
            $table->date('d_finvinculacion');
            $table->bigInteger('prm_tvinculacion_id')->unsigned();
            $table->bigInteger('prm_documento_id')->unsigned();
            $table->integer('sis_esta_id');
            //$table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_tvinculacion_id')->references('id')->on('parametros');
            $table->foreign('prm_documento_id')->references('id')->on('parametros');
            $table->foreign('sis_cargo_id')->references('id')->on('sis_cargos');

            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->unique(['prm_documento_id', 's_documento']);
        });
        Schema::create('h_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('email');
            $table->string('password');
            $table->dateTime('created_at');
            $table->Integer('user_crea_id');
            $table->string('s_telefono');
            $table->string('s_matriculap');
            $table->date('d_vinculacion');
            $table->Integer('itiestan')->default(0);
            $table->Integer('itiegabe')->default(0);
            $table->integer('sis_cargo_id');
            $table->date('d_finvinculacion');
            $table->integer('prm_tvinculacion_id');
            $table->integer('sis_municipio_id');
            $table->integer('prm_documento_id');
            $table->integer('sis_esta_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_users');
        Schema::dropIfExists('users');
    }
}
