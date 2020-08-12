<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiResidenciasTable extends Migration
{
    private $tablaxxx = 'fi_residencias';
    private $tablaxxx2 = 'fi_condicion_ambientes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_tiene_dormir_id')->unsigned(); //->comment('FI 3.1 TIENE LUGAR DONDE DORMIR');
            $table->bigInteger('i_prm_tipo_duerme_id')->unsigned(); //->comment('FI 3.2 TIPO DE RESIDENCIA O LUGAR DONDE DUERME');
            $table->bigInteger('i_prm_tipo_tenencia_id')->unsigned(); //->comment('FI 3.3 LA RESIDENCIA ES');
            $table->bigInteger('i_prm_tipo_direccion_id')->unsigned(); //->comment('FI 3.4A TIPO DE DIRECCIÓN DE LA RESIDENCIA');
            $table->bigInteger('i_prm_zona_direccion_id')->unsigned(); //->comment('FI 3.4B ZONA DE LA RESIDENCIA');
            $table->bigInteger('i_prm_tipo_via_id')->nullable()->unsigned(); //->comment('TIPO DE VIA DE LA RESIDENCIA');
            $table->string('s_nombre_via')->nullable(); //->comment('NUMERO/NOMBRE VÍA PRINCIPAL');
            $table->bigInteger('i_prm_alfabeto_via_id')->nullable()->unsigned(); //->comment('ALFABETO DE LA VIA DE LA RESIDENCIA');
            $table->bigInteger('i_prm_tiene_bis_id')->nullable()->unsigned(); //->comment('TIENE BIS');
            $table->bigInteger('i_prm_bis_alfabeto_id')->nullable()->unsigned(); //->comment('LETRA BIS');
            $table->bigInteger('i_prm_cuadrante_vp_id')->nullable()->unsigned(); //->comment('CUADRANTE VP');
            $table->bigInteger('i_via_generadora')->nullable(); //->comment('NÚMERO VIA GENERADORA');
            $table->bigInteger('i_prm_alfabetico_vg_id')->nullable()->unsigned(); //->comment('ALFABÉTICO VG');
            $table->bigInteger('i_placa_vg')->nullable(); //->comment('PLACA VG'); 
            $table->bigInteger('i_prm_cuadrante_vg_id')->nullable()->unsigned(); //->comment('CUADRANTE VG');
            $table->bigInteger('i_prm_estrato_id')->unsigned(); //->comment('FI 3.5 ESTRATO DE LA RESIDENCIA DONDE DUERME');
            $table->bigInteger('i_prm_espacio_parcha_id')->unsigned(); //->comment('FI 3.6 LUGAR DONDE PARCHA');
            $table->string('s_nombre_espacio_parcha')->nullable(); //->comment('FI 3.6A NOMBRE ESPACIO DONDE PARCHA');
            $table->string('s_complemento')->nullable(); //->comment('FI 3.7 COMPLEMENTO DEL LUGAR DONDE PARCHA');
            $table->bigInteger('sis_localidad_id')->unsigned(); //->comment('FI 3.8 LOCALIDAD');
            $table->bigInteger('sis_upz_id')->unsigned(); //->comment('FI 3.9 Y 3.10 UPZ');
            $table->bigInteger('sis_barrio_id')->unsigned(); //->comment('FI 3.11 BARRIO DE LA RESIDENCIA');
            $table->string('s_telefono_uno')->nullable(); //->comment('FI 3.12 TELEFONO 1');
            $table->string('s_telefono_dos')->nullable(); //->comment('FI 3.13 TELEFONO 2');
            $table->string('s_telefono_tres')->nullable(); //->comment('FI 3.14 TELEFONO 3');
            $table->string('s_email_facebook')->nullable(); //->comment('FI 3.15 EMAIL O FACEBOOK');
            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->bigInteger('user_crea_id')->unsigned();  //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned(); //->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas'); //->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_tiene_dormir_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_duerme_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_tenencia_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_direccion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_zona_direccion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_via_id')->references('id')->on('parametros');
            $table->foreign('i_prm_alfabeto_via_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tiene_bis_id')->references('id')->on('parametros');
            $table->foreign('i_prm_bis_alfabeto_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cuadrante_vp_id')->references('id')->on('parametros');
            $table->foreign('i_prm_alfabetico_vg_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cuadrante_vg_id')->references('id')->on('parametros');
            $table->foreign('i_prm_estrato_id')->references('id')->on('parametros');
            $table->foreign('i_prm_espacio_parcha_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS DE UBICACION Y DE CONTACTO DE LA PERSONA ENTREVISTADA, SECCION 3 RESIDENCIA DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_residencia_id')->unsigned()->comment('REGISTRO RESIDENCIA AL QUE SE LE ASIGNA LA CONDICION DEL AMBIENTE');
            $table->bigInteger('i_prm_condicion_amb_id')->unsigned()->comment('FI 3.16 CONDICIONES DEL AMBIENTE');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_residencia_id')->references('id')->on('fi_residencias');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE CONDICIONES DEL AMBIENTE Y DE RIESGO CERCA DE LA VIVIENDA DE LA PERSONA ENTREVISTADA, PREGUNTA 3.16 SECCION 3 RESIDENCIA DE LA FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}