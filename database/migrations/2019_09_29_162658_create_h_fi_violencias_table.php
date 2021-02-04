<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiViolenciasTable extends Migration
{
    private $tablaxxx = 'h_fi_violencias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('i_prm_presenta_violencia_id')->unsigned()->comment('FI 12.1 PRESENTA ALGÚN TIPO DE VIOLENCIA');
            $table->bigInteger('prm_ejerviol_id')->unsigned()->nullable()->comment('12.1 A HA EJERCIDO ALGUN TIPO DE PRESUNTA VIOLENCIA DURNTE LA ACTIVIDAD EN CONFLICTO CON LA LEY?');
            $table->bigInteger('i_prm_violencia_genero_id')->unsigned()->nullable()->comment('FI 12.2 EL TIPO DE VIOLENCIA REFERENCIADO CORRESPONDE A VIOLENCIA BASADA EN GÉNERO/IDENTIDAD DE GÉNERO');
            $table->bigInteger('i_prm_condicion_presenta_id')->unsigned()->comment('FI 12.3 CONDICIÓN ESPECIAL PRESENTA');
            $table->bigInteger('i_prm_depto_condicion_id')->nullable()->unsigned()->comment('FI DEPARTAMENTO CONDICION ESPECIAL');
            $table->bigInteger('i_prm_municipio_condicion_id')->nullable()->unsigned()->comment('FI MUNICIPIO CONDICION ESPECIAL');
            $table->bigInteger('i_prm_tiene_certificado_id')->nullable()->unsigned()->comment('12.4 CUENTA CON CERTIFICADO');
            $table->bigInteger('i_prm_depto_certifica_id')->nullable()->unsigned()->comment('FI DEPARTAMENTO CERTIFICA CONDICION ESPECIAL');
            $table->bigInteger('i_prm_municipio_certifica_id')->nullable()->unsigned()->comment('FI MUNICIPIO CERTIFICA CONDICION ESPECIAL');
            $table->bigInteger('prm_cabefami_id')->nullable()->unsigned()->comment('FI ES CABEZA DE FAMILIA');
            $table->bigInteger('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}