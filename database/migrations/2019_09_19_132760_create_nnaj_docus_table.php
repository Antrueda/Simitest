<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNnajDocusTable extends Migration
{
    private $tablaxxx = 'nnaj_docus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(9313)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table = CamposMagicos::getForeign($table, 'fi_datos_basico');
            $table->string('s_documento')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table = CamposMagicos::getForeign($table, 'prm_tipodocu_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_doc_fisico_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_ayuda_id', 'parametros');
            $table = CamposMagicos::getForeignull($table, 'sis_pai');
            $table = CamposMagicos::getForeignull($table, 'sis_departam');
            $table = CamposMagicos::getForeign($table, 'sis_municipio');
            $table = CamposMagicos::getForeign($table, 'sis_docfuen');
            $table = CamposMagicos::magicos($table);
            $table->unique(['s_documento']);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA IDENTIFICACION DEL NNAJ.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('s_documento')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table->Integer('fi_datos_basico_id')->comment('CAMPO ID NNAJ');
            $table->Integer('prm_tipodocu_id')->comment('CAMPO PARAMETRO TIPO DE DOCUMENTO');
            $table->Integer('prm_doc_fisico_id')->comment('CAMPO PARAMETROTIENE DOCUMENTO FISICO');
            $table->Integer('prm_ayuda_id')->comment('CAMPO PARAMETRO POR QUE RAZON');
            $table->Integer('sis_pai_id')->nullable();
            $table->Integer('sis_departam_id')->nullable();
            $table->Integer('sis_municipio_id')->comment('CAMPO ID MUNICIPIO');
            $table->Integer('sis_docfuen_id')->comment('CAMPO DOCUMENTO FUENTE');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
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
