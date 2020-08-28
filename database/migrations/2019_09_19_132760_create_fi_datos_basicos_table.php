<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiDatosBasicosTable extends Migration
{
    private $tablaxxx = 'fi_datos_basicos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_apodo')->nullable();
            $table = CamposMagicos::getForeign($table, 'nnaj_nfamili');
            $table = CamposMagicos::getForeign($table, 'sis_nnaj');
            $table = CamposMagicos::getForeign($table, 'prm_tipoblaci_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_vestimenta_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'sis_docfuen');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DEL NNAJ, YA SEA QUE VENGAN DE LA FICHA DE INGRESO, VALORACIÓN SICOSOCIAL O CONSULTA SOCIAL EN DOMICILIO.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_apodo')->nullable();
            $table->Integer('sis_nnaj_id');
            $table->Integer('prm_tipoblaci_id');
            $table->Integer('prm_vestimenta_id');
            $table->Integer('nnaj_nfamili_id');
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
