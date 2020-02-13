<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiJusticiaRestaurativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_justicia_restaurativas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('i_prm_vinculado_violencia_id')->unsigned();//->comment('FI 10.4.1 ESTA VINCULADO A DELINCUENCIA O VIOLENCIA');
            $table->bigInteger('i_prm_causa_vincula_vio_id')->unsigned();//->comment('FI 10.4.2 CAUSA VINCULACIÓN A DELINCUENCIA O VIOLENCIA');
            $table->bigInteger('i_prm_riesgo_participar_id')->unsigned();//->comment('FI 10.5.1 ESTA EN RIESGO DE PARTICIPAR ACTOS DELICTIVOS');
            $table->bigInteger('i_prm_causa_riesgo_part_id')->unsigned();//->comment('FI 10.5.2 CAUSA RIESGO PARTICIPAR ACTOS DELICTIVOS');

            $table->bigInteger('sis_nnaj_id')->unsigned();//->comment('NNAJ AL QUE SE LE ASIGNA LA JUSTICIA RESTAURATIVA');
            $table->bigInteger('user_crea_id')->unsigned(); //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned();//->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');//->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_vinculado_violencia_id')->references('id')->on('parametros');
            $table->foreign('i_prm_causa_vincula_vio_id')->references('id')->on('parametros');
            $table->foreign('i_prm_riesgo_participar_id')->references('id')->on('parametros');
            $table->foreign('i_prm_causa_riesgo_part_id')->references('id')->on('parametros');
            
        });

        Schema::create('fi_proceso_pards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_justicia_restaurativa_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA EL PARD');
            $table->bigInteger('i_prm_ha_estado_pard_id')->unsigned()->comment('FI 10.1.1 HA ESTADO EN PARD');
            $table->bigInteger('i_prm_actualmente_pard_id')->unsigned()->comment('FI 10.1.2 ACTUALMENTE ESTÁ EN PARD');
            $table->bigInteger('i_prm_tipo_tiempo_pard_id')->nullable()->unsigned()->comment('FI 10.1.3.1 TIPO TIEMPO HACE CUANTO ESTÁ EN PARD');
            $table->bigInteger('i_cuanto_pard')->nullable()->comment('FI 10.1.3.2 HACE CUANTO ESTÁ EN PARD');
            $table->bigInteger('i_prm_motivo_pard_id')->nullable()->unsigned()->comment('FI 10.1.4 MOTIVO PARD');
            $table->string('s_nombre_defensor')->nullable()->comment('FI 10.1.5 NOMBRE DEFENSOR DE FAMILIA');
            $table->string('s_telefono_defensor')->nullable()->comment('FI 10.1.6 TELÉFONO DEFENSOR DE FAMILIA');
            $table->string('s_lugar_abierto_pard')->nullable()->comment('FI 10.1.6 LUGAR ABIERTO EL PARD');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justicia_restaurativa_id')->references('id')->on('fi_justicia_restaurativas');
            $table->foreign('i_prm_ha_estado_pard_id')->references('id')->on('parametros');
            $table->foreign('i_prm_actualmente_pard_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tiempo_pard_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_pard_id')->references('id')->on('parametros');
            
        });

        Schema::create('fi_proceso_srpas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_justicia_restaurativa_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA EL SRPA');
            $table->bigInteger('i_prm_ha_estado_srpa_id')->unsigned()->comment('FI 10.2.1 HA ESTADO EN SRPA');
            $table->bigInteger('i_prm_actualmente_srpa_id')->unsigned()->comment('FI 10.2.2 ACTUALMENTE ESTÁ EN SRPA');
            $table->bigInteger('i_prm_tipo_tiempo_srpa_id')->nullable()->unsigned()->comment('FI 10.2.3.1 TIPO TIEMPO HACE CUANTO ESTÁ EN SRPA');
            $table->bigInteger('i_cuanto_srpa')->nullable()->comment('FI 10.2.3.2 HACE CUANTO ESTÁ EN SRPA');
            $table->bigInteger('i_prm_motivo_srpa_id')->nullable()->unsigned()->comment('FI 10.2.4 MOTIVO SRPA');
            $table->bigInteger('i_prm_sancion_srpa_id')->nullable()->unsigned()->comment('FI 10.2.5 SANCIÓN PEDAGÓGICA SRPA');

            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justicia_restaurativa_id')->references('id')->on('fi_justicia_restaurativas');
            $table->foreign('i_prm_ha_estado_srpa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_actualmente_srpa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tiempo_srpa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_srpa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_sancion_srpa_id')->references('id')->on('parametros');
            
        });

        Schema::create('fi_proceso_spoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_justicia_restaurativa_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA EL SPOA');
            $table->bigInteger('i_prm_ha_estado_spoa_id')->unsigned()->comment('FI 10.3.1 HA ESTADO EN SPOA');
            $table->bigInteger('i_prm_actualmente_spoa_id')->unsigned()->comment('FI 10.3.2 ACTUALMENTE ESTÁ EN SPOA');
            $table->bigInteger('i_prm_tipo_tiempo_spoa_id')->nullable()->unsigned()->comment('FI 10.3.3.1 TIPO TIEMPO HACE CUANTO ESTÁ EN SPOA');
            $table->bigInteger('i_cuanto_spoa')->nullable()->comment('FI 10.3.3.2 HACE CUANTO ESTÁ EN SPOA');
            $table->bigInteger('i_prm_motivo_spoa_id')->nullable()->unsigned()->comment('FI 10.3.4 MOTIVO SPOA');
            $table->bigInteger('i_prm_mod_cumple_pena_id')->nullable()->unsigned()->comment('FI 10.3.5 MODALIDAD CUMPLIMIENTO DE PENA');
            $table->bigInteger('i_prm_ha_estado_preso_id')->nullable()->unsigned()->comment('FI 10.3.6 HA ESTADO PRIVADO DE LA LIBERTAD');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justicia_restaurativa_id')->references('id')->on('fi_justicia_restaurativas');
            $table->foreign('i_prm_ha_estado_spoa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_actualmente_spoa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tiempo_spoa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_spoa_id')->references('id')->on('parametros');
            $table->foreign('i_prm_mod_cumple_pena_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ha_estado_preso_id')->references('id')->on('parametros');
            
        });

        Schema::create('fi_proceso_familias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_justicia_restaurativa_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA EL PROCESO DE LA FAMILIA');
            $table->bigInteger('fi_composicion_fami_id')->unsigned()->comment('MIEMBRO DE LA FAMILIA');
            $table->string('s_proceso')->comment('PROCESO');
            $table->bigInteger('i_prm_vigente_id')->unsigned()->comment('SE ENCUENTRA VIGENTE');
            $table->bigInteger('i_numero_veces')->comment('NUMERO DE VECES');
            $table->string('s_motivo')->comment('MOTIVO');
            $table->bigInteger('i_hace_cuanto')->comment('HACE CUANTO');
            $table->bigInteger('i_prm_tipo_tiempo_id')->unsigned()->comment('TIPO DE TIEMPO');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justicia_restaurativa_id')->references('id')->on('fi_justicia_restaurativas');
            $table->foreign('fi_composicion_fami_id')->references('id')->on('fi_composicion_famis');
            $table->foreign('i_prm_vigente_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tiempo_id')->references('id')->on('parametros');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_proceso_familias');
        Schema::dropIfExists('fi_proceso_spoas');
        Schema::dropIfExists('fi_proceso_srpas');
        Schema::dropIfExists('fi_proceso_pards');
        Schema::dropIfExists('fi_justicia_restaurativas');
        
    }
}
