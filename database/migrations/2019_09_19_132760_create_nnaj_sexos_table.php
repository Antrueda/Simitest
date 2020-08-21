<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNnajSexosTable extends Migration
{
    private $tablaxxx = 'nnaj_sexos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table = CamposMagicos::getForeign($table, 'fi_datos_basico');
            $table->string('s_nombre_identitario');
            $table = CamposMagicos::getForeign($table, 'prm_sexo_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_identidad_genero_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'prm_orientacion_sexual_id', 'parametros');
            $table = CamposMagicos::getForeign($table, 'sis_docfuen');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA INFORMACION DE SEXO E IDENTIDAD DE GENERO DEL NNAJ.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('fi_datos_basico_id');
            $table->string('s_nombre_identitario');
            $table->Integer('prm_sexo_id');
            $table->Integer('prm_identidad_genero_id');
            $table->Integer('prm_orientacion_sexual_id');
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
