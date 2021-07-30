<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeAsisnnajdatauxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ae_asisnnajdatauxs', function (Blueprint $table) {
            $table->id();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->string('s_nombre_identitario')->nullable();
            $table->integer('prm_tipodocu_id')->unsigned();
            $table->integer('prm_doc_fisico_id')->unsigned()->nullable();
            $table->integer('prm_ayuda_id')->unsigned()->nullable();
            $table->integer('s_documento');
            $table->string('d_nacimiento');
            $table->integer('aniosxxx');
            $table->integer('prm_sexo_id')->unsigned();
            $table->integer('sis_localidad_id')->unsigned();
            $table->integer('sis_upz_id')->unsigned();
            $table->integer('sis_upzbarri_id')->unsigned();

            $table->integer('i_prm_tipo_via_id')->unsigned();
            $table->string('s_complemento')->nullable();
            $table->integer('s_nombre_via');
            $table->integer('i_prm_alfabeto_via_id')->unsigned();
            $table->integer('i_prm_tiene_bis_id')->unsigned()->nullable();
            $table->integer('i_prm_bis_alfabeto_id')->unsigned()->nullable();
            $table->integer('i_prm_cuadrante_vp_id')->unsigned()->nullable();
            $table->integer('i_via_generadora');
            $table->integer('i_prm_alfabetico_vg_id')->unsigned()->nullable();
            $table->integer('i_placa_vg');
            $table->integer('i_prm_cuadrante_vg_id')->unsigned()->nullable();

            $table->string('s_telefono_uno')->nullable();
            $table->integer('prm_tipoblaci_id')->unsigned();
            $table->integer('prm_pefil_id')->unsigned();
            $table->integer('prm_lugar_focali_id')->unsigned();
            $table->integer('prm_autorizo_id')->unsigned();
            $table->text('observaciones');
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            // $table->foreign('prm_tipodocu_id')->references('id')->on('parametros');
            // $table->foreign('prm_doc_fisico_id')->references('id')->on('parametros');
            // $table->foreign('prm_ayuda_id')->references('id')->on('parametros');
            // $table->foreign('prm_sexo_id')->references('id')->on('parametros');
            // $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            // $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            // $table->foreign('sis_upzbarri_id')->references('id')->on('sis_upzbarris');

            // $table->foreign('i_prm_tipo_via_id')->references('id')->on('parametros');
            // $table->foreign('i_prm_alfabeto_via_id')->references('id')->on('parametros');
            // $table->foreign('i_prm_tiene_bis_id')->references('id')->on('parametros');
            // $table->foreign('i_prm_bis_alfabeto_id')->references('id')->on('parametros');
            // $table->foreign('i_prm_cuadrante_vp_id')->references('id')->on('parametros');
            // $table->foreign('i_prm_alfabetico_vg_id')->references('id')->on('parametros');
            // $table->foreign('i_prm_cuadrante_vg_id')->references('id')->on('parametros');

            // $table->foreign('prm_tipoblaci_id')->references('id')->on('parametros');
            // $table->foreign('prm_pefil_id')->references('id')->on('parametros');
            // $table->foreign('prm_lugar_focali_id')->references('id')->on('parametros');
            // $table->foreign('prm_autorizo_id')->references('id')->on('parametros');

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
        Schema::dropIfExists('ea_asisnnaj_datauxs');
    }
}
