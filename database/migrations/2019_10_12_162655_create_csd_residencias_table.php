<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsdResidenciasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('csd_residencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_tipo_id')->unsigned();
            $table->bigInteger('prm_es_id')->unsigned();
            $table->bigInteger('prm_dir_tipo_id')->unsigned();
            $table->bigInteger('prm_dir_zona_id')->unsigned();
            $table->bigInteger('prm_dir_via_id')->unsigned()->nullable();
            $table->string('dir_nombre')->nullable();
            $table->bigInteger('prm_dir_alfavp_id')->unsigned()->nullable();
            $table->bigInteger('prm_dir_bis_id')->unsigned()->nullable();
            $table->bigInteger('prm_dir_alfabis_id')->unsigned()->nullable();
            $table->bigInteger('prm_dir_cuadrantevp_id')->unsigned()->nullable();
            $table->integer('dir_generadora')->nullable();
            $table->bigInteger('prm_dir_alfavg_id')->unsigned()->nullable();
            $table->integer('dir_placa')->nullable();
            $table->bigInteger('prm_dir_cuadrantevg_id')->unsigned()->nullable();
            $table->bigInteger('prm_estrato_id')->unsigned()->nullable();
            $table->string('dir_complemento')->nullable();
            $table->bigInteger('sis_localidad_id')->unsigned();
            $table->bigInteger('sis_upz_id')->unsigned();
            $table->bigInteger('sis_barrio_id')->unsigned()->nullable();
            $table->string('telefono_uno',10)->nullable();
            $table->string('telefono_dos',10);
            $table->string('telefono_tres',10)->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('prm_piso_id')->unsigned();
            $table->bigInteger('prm_muro_id')->unsigned();
            $table->bigInteger('prm_higiene_id')->unsigned();
            $table->bigInteger('prm_ventilacion_id')->unsigned();
            $table->bigInteger('prm_iluminacion_id')->unsigned();
            $table->bigInteger('prm_orden_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
            $table->foreign('prm_es_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_tipo_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_zona_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_via_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_alfavp_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_bis_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_alfabis_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_cuadrantevp_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_alfavg_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_cuadrantevg_id')->references('id')->on('parametros');
            $table->foreign('prm_estrato_id')->references('id')->on('parametros');
            $table->foreign('sis_localidad_id')->references('id')->on('sis_localidads');
            $table->foreign('sis_upz_id')->references('id')->on('sis_upzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('prm_piso_id')->references('id')->on('parametros');
            $table->foreign('prm_muro_id')->references('id')->on('parametros');
            $table->foreign('prm_higiene_id')->references('id')->on('parametros');
            $table->foreign('prm_ventilacion_id')->references('id')->on('parametros');
            $table->foreign('prm_iluminacion_id')->references('id')->on('parametros');
            $table->foreign('prm_orden_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('csd_reside_ambiente', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_residencia_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_residencia_id')->references('id')->on('csd_residencias');
            $table->unique(['parametro_id', 'csd_residencia_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('csd_reside_ambiente');
        Schema::dropIfExists('csd_residencias');
    }
}