<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNnajNacimisTable extends Migration
{
    private $tablaxxx = 'nnaj_nacimis';
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
            $table->date('d_nacimiento')->comment('CAMPO DE FECHA DE NACIMIENTO');
            $table = CamposMagicos::getForeignull($table, 'sis_pai');
            $table = CamposMagicos::getForeignull($table, 'sis_departam');
            $table = CamposMagicos::getForeign($table, 'sis_municipio');
            $table = CamposMagicos::getForeign($table, 'sis_docfuen');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA INFORMACION DE NACIMIENTO DEL NNAJ.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->Integer('fi_datos_basico_id');
            $table->date('d_nacimiento');
            $table->Integer('sis_pai_id')->nullable();
            $table->Integer('sis_departam_id')->nullable();
            $table->Integer('sis_municipio_id');
            $table->Integer('sis_docfuen_id');
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
