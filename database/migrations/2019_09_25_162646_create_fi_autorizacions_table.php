<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiAutorizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_autorizacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_nombre_mayor')->nullable();
            $table->bigInteger('i_documento_mayor')->nullable()->unsigned();
            $table->string('s_lugarexp_mayor')->nullable();
            $table->bigInteger('i_prm_autorizo_id')->nullable()->unsigned();

            $table->bigInteger('i_prm_parentesco_mayor_id')->nullable()->unsigned();
            $table->string('s_nombre_nna')->nullable();
            $table->bigInteger('i_edad_nna')->nullable()->unsigned();
            $table->bigInteger('i_prm_documento_menor_id')->nullable()->unsigned();
            $table->string('s_documento_nna')->nullable();
            $table->string('s_persona_concerta')->nullable();
            $table->date('d_fecha_autorizacion');
            $table->bigInteger('i_prm_tipo_diligencia_id')->unsigned();
            
            $table->engine = 'InnoDB';
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_parentesco_mayor_id')->references('id')->on('parametros');
            $table->foreign('i_prm_documento_menor_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_diligencia_id')->references('id')->on('parametros');
        });

        Schema::create('fi_modalidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_autorizacion_id')->unsigned()->comment('REGISTRO AUTORIZACIÓN AL QUE SE LE ASIGNA LA MODALIDAD');
            $table->bigIntegeR('i_prm_modalidad_id')->unsigned()->comment('MODALIDADES');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->boolean('activo')->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_autorizacion_id')->references('id')->on('fi_autorizacions');
            $table->foreign('i_prm_modalidad_id')->references('id')->on('parametros');
            $table->engine = 'InnoDB';
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_modalidads');
        Schema::dropIfExists('fi_autorizacions');
    }
}

