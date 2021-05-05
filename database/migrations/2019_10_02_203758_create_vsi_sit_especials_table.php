<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiSitEspecialsTable extends Migration
{
    private $tablaxxx = 'vsi_sit_especials';
    private $tablaxxx2 = 'vsi_sitesp_victima';
    private $tablaxxx3 = 'vsi_sitesp_riesgo';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->integer('prm_victima_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VICTIMA');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_victima_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE LOS DETALLES DE LA PERSONA VICTIMA DE ESCCNA, SECCIÓN 15 SITUACION ESPECIAL Y ESCNNA DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO OPCIONES VICTIMA DE ESCNA');
            $table->integer('vsi_sitespecial_id')->unsigned()->comment('CAMPO DE ID SITUACION ESPECIAL');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_sitespecial_id')->references('id')->on('vsi_sit_especials');
            $table->unique(['parametro_id', 'vsi_sitespecial_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE CONTIENE LISTADO DE LAS OPCIONES DE VICTIMA DE ESCCNA, PREGUNTA 15.1 SECCIÓN 15 SITUACION ESPECIAL Y ESCNNA DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO OPCIONES RIESGO DE ESCNA');
            $table->integer('vsi_sitespecial_id')->unsigned()->comment('CAMPO DE ID SITUACION ESPECIAL');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_sitespecial_id')->references('id')->on('vsi_sit_especials');
            $table->unique(['parametro_id', 'vsi_sitespecial_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE CONTIENE LISTADO DE LAS OPCIONES DE RIESGO DE ESCCNA, PREGUNTA 15.2 SECCIÓN 15 SITUACION ESPECIAL Y ESCNNA DE LA FICHA SICOSOCIAL'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
