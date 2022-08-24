<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiResidenciasTable extends Migration
{
    private $tablaxxx = 'h_fi_residencias';
    private $tablaxxx2 = 'h_fi_condicion_ambientes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('i_prm_tiene_dormir_id')->unsigned()->comment('FI 3.1 TIENE LUGAR DONDE DORMIR');
            $table->integer('i_prm_tipo_duerme_id')->unsigned()->comment('FI 3.2 TIPO DE RESIDENCIA O LUGAR DONDE DUERME');
            $table->integer('i_prm_tipo_tenencia_id')->unsigned()->comment('FI 3.3 LA RESIDENCIA ES');
            $table->integer('i_prm_tipo_direccion_id')->unsigned()->comment('FI 3.4A TIPO DE DIRECCIÓN DE LA RESIDENCIA');
            $table->integer('i_prm_zona_direccion_id')->unsigned()->comment('FI 3.4B ZONA DE LA RESIDENCIA');
            $table->integer('i_prm_tipo_via_id')->nullable()->unsigned()->comment('TIPO DE VIA DE LA RESIDENCIA');
            $table->string('s_nombre_via')->nullable()->comment('NUMERO/NOMBRE VÍA PRINCIPAL');
            $table->integer('i_prm_alfabeto_via_id')->nullable()->unsigned()->comment('ALFABETO DE LA VIA DE LA RESIDENCIA');
            $table->integer('i_prm_tiene_bis_id')->nullable()->unsigned()->comment('TIENE BIS');
            $table->integer('i_prm_bis_alfabeto_id')->nullable()->unsigned()->comment('LETRA BIS');
            $table->integer('i_prm_cuadrante_vp_id')->nullable()->unsigned()->comment('CUADRANTE VP');
            $table->integer('i_via_generadora')->nullable()->comment('NÚMERO VIA GENERADORA');
            $table->integer('i_prm_alfabetico_vg_id')->nullable()->unsigned()->comment('ALFABÉTICO VG');
            $table->integer('i_placa_vg')->nullable()->comment('PLACA VG');
            $table->integer('i_prm_cuadrante_vg_id')->nullable()->unsigned()->comment('CUADRANTE VG');
            $table->integer('i_prm_estrato_id')->unsigned()->comment('FI 3.5 ESTRATO DE LA RESIDENCIA DONDE DUERME');
            $table->integer('i_prm_espacio_parcha_id')->unsigned()->comment('FI 3.6 LUGAR DONDE PARCHA');
            $table->string('s_nombre_espacio_parcha')->nullable()->comment('FI 3.6A NOMBRE ESPACIO DONDE PARCHA');
            $table->string('s_complemento')->nullable()->comment('FI 3.7 COMPLEMENTO DEL LUGAR DONDE PARCHA');
            $table->integer('sis_upzbarri_id')->unsigned()->comment('FI 3.11 BARRIO DE LA RESIDENCIA');
            $table->string('s_telefono_uno')->nullable()->comment('FI 3.12 TELEFONO 1');
            $table->string('s_telefono_dos')->nullable()->comment('FI 3.13 TELEFONO 2');
            $table->string('s_telefono_tres')->nullable()->comment('FI 3.14 TELEFONO 3');
            $table->string('s_email_facebook')->nullable()->comment('FI 3.15 EMAIL O FACEBOOK');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_residencia_id')->unsigned()->comment('REGISTRO RESIDENCIA AL QUE SE LE ASIGNA LA CONDICION DEL AMBIENTE');
            $table->integer('i_prm_condicion_amb_id')->unsigned()->comment('FI 3.16 CONDICIONES DEL AMBIENTE');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
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
