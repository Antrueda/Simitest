<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiComposicionFamisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_composicion_famis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_parentesco_id')->unsigned();
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->string('s_telefono')->nullable();
            $table->string('s_documento')->unique();
            $table->date('d_nacimiento'); 
            $table->bigInteger('i_prm_ocupacion_id')->unsigned();
            $table->bigInteger('sis_pai_id')->unsigned();
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('i_prm_vinculado_idipron_id')->unsigned();
            $table->bigInteger('i_prm_convive_nnaj_id')->unsigned();
            $table->bigInteger('prm_documento_id')->unsigned();
            $table->bigInteger('fi_nucleo_familiar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('sis_pai_id')->references('id')->on('sis_pais');
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_parentesco_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ocupacion_id')->references('id')->on('parametros');
            $table->foreign('prm_documento_id')->references('id')->on('parametros');
            $table->foreign('i_prm_vinculado_idipron_id')->references('id')->on('parametros');
            $table->foreign('i_prm_convive_nnaj_id')->references('id')->on('parametros');
            $table->foreign('fi_nucleo_familiar_id')->references('id')->on('fi_nucleo_familiars');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_composicion_famis');
    }
}
