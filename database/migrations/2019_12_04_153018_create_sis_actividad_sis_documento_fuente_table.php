<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisActividadSisDocumentoFuenteTable extends Migration
{
    private $tablaxxx = 'sis_activi_sis_docufuen';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_actividad_id')->unsigned()->comment('LLAVE FORANEA TABLA sis_actividads');
            $table->integer('sis_docfuen_id')->unsigned()->comment('LLAVE FORANEA TABLA sis_docfuen');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACIÓN ENTRE LAS ACTIVIDADES Y LOS FORMATOS REGISTRADOS EN EL SISTEMA'");
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
