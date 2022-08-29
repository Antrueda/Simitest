<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNnajFocalisTable extends Migration
{
    private $tablaxxx = 'nnaj_focalis';
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
            $table->string('s_nombre_focalizacion')->comment('CAMPO DE NOMBRE DE FOCALIZACION');
            $table->string('s_lugar_focalizacion')->comment('CAMPO DE LUGAR DE FOCALIZACION');
            $table = CamposMagicos::getForeign($table, 'sis_upzbarri');
            $table = CamposMagicos::getForeign($table, 'sis_docfuen');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA INFORMACION DE FOCALIZACION DEL NNAJ.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->Integer('fi_datos_basico_id');
            $table->string('s_nombre_focalizacion');
            $table->string('s_lugar_focalizacion');
            $table->Integer('sis_upzbarri_id');
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
