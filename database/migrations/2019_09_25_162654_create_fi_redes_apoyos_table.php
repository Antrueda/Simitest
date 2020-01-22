<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiRedesApoyosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_red_apoyo_antecedentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('i_tiempo');
            $table->bigInteger('sis_entidad_id')->unsigned();
            $table->string('s_servicio');
            $table->bigInteger('i_prm_tiempo_id')->unsigned();
            $table->bigInteger('i_prm_anio_prestacion_id')->unsigned();

            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->bigInteger('user_crea_id')->unsigned(); //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned(); //->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas'); //->comment('ESTADO DEL REGISTRO');
            $table->timestamps();

            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('i_prm_tiempo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_anio_prestacion_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            
        });
        Schema::create('fi_red_apoyo_actuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->bigInteger('user_crea_id')->unsigned(); //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned(); //->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas'); //->comment('ESTADO DEL REGISTRO');
            $table->timestamps();

            $table->bigInteger('i_prm_tipo_red_id')->unsigned();              
            $table->string('s_nombre_persona');
            $table->string('s_servicio');
            $table->string('s_telefono'); 
            $table->string('s_direccion');

            $table->foreign('i_prm_tipo_red_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_red_apoyo_antecedentes');
        Schema::dropIfExists('fi_red_apoyo_actuals');
    }
}
