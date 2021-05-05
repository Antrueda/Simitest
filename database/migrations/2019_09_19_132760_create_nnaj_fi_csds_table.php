<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNnajFiCsdsTable extends Migration
{
    private $tablaxxx = 'nnaj_fi_csds';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table = CamposMagicos::getForeign($table, 'fi_datos_basico');
            $table = CamposMagicos::getForeign($table, 'prm_etnia_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_poblacion_etnia_id', 'parametros');
            $table->string('s_apodo')->nullable()->comment('CAMPO DE APODO');
            $table = CamposMagicos::getForeign($table, 'prm_gsanguino_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_factor_rh_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_estado_civil_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'sis_docfuen');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DEL NNAJ, YA SEA QUE VENGAN DE LA FICHA DE INGRESO O CONSULTA SOCIAL EN DOMICILIO.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->Integer('fi_datos_basico_id');
            $table->Integer('prm_etnia_id');
            $table->string('s_apodo')->nullable();
            $table->Integer('prm_gsanguino_id');
            $table->Integer('prm_factor_rh_id');
            $table->Integer('sis_nnaj');
            $table->Integer('prm_estado_civil_id');
            $table->Integer('sis_docfuen_id');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
