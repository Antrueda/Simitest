<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiViolenciasTable extends Migration
{
    private $tablaxxx = 'fi_violencias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('i_prm_presenta_violencia_id')->unsigned()->comment('FI 12.1 PRESENTA ALGÚN TIPO DE VIOLENCIA');
            $table->bigInteger('prm_ejerviol_id')->unsigned()->nullable()->comment('FI 12.1 A HA EJERCIDO ALGUN TIPO DE PRESUNTA VIOLENCIA DURANTE LA ACTIVIDAD EN CONFLICTO CON LA LEY');
            
           
            $table->bigInteger('i_prm_violencia_genero_id')->unsigned()->nullable()->comment('FI 12.2 EL TIPO DE VIOLENCIA REFERENCIADO CORRESPONDE A VIOLENCIA BASADA EN GÉNERO/IDENTIDAD DE GÉNERO');
            $table->bigInteger('i_prm_condicion_presenta_id')->unsigned()->comment('FI 12.3 CONDICIÓN ESPECIAL PRESENTA');
            $table->bigInteger('i_prm_depto_condicion_id')->nullable()->unsigned()->comment('FI DEPARTAMENTO CONDICION ESPECIAL');
            $table->bigInteger('i_prm_municipio_condicion_id')->nullable()->unsigned()->comment('FI MUNICIPIO CONDICION ESPECIAL');
            $table->bigInteger('i_prm_tiene_certificado_id')->nullable()->unsigned()->comment('12.4 CUENTA CON CERTIFICADO');
            $table->bigInteger('i_prm_depto_certifica_id')->nullable()->unsigned()->comment('FI DEPARTAMENTO CERTIFICA CONDICION ESPECIAL');
            $table->bigInteger('i_prm_municipio_certifica_id')->nullable()->unsigned()->comment('FI MUNICIPIO CERTIFICA CONDICION ESPECIAL');
            $table->bigInteger('prm_cabefami_id')->nullable()->unsigned()->comment('FI ES CABEZA DE FAMILIA');
            $table->bigInteger('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_presenta_violencia_id')->references('id')->on('parametros');
            $table->foreign('prm_ejerviol_id')->references('id')->on('parametros');
            $table->foreign('i_prm_violencia_genero_id')->references('id')->on('parametros');
            $table->foreign('i_prm_condicion_presenta_id')->references('id')->on('parametros');
            $table->foreign('i_prm_depto_condicion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_municipio_condicion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tiene_certificado_id')->references('id')->on('parametros');
            $table->foreign('i_prm_depto_certifica_id')->references('id')->on('parametros');
            $table->foreign('i_prm_municipio_certifica_id')->references('id')->on('parametros');
            $table->foreign('prm_cabefami_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA DETALLES SOBRE LA VIOLENCIA EXPERIMENTADA POR LA PERSONA ENTREVISTADA.'");
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
