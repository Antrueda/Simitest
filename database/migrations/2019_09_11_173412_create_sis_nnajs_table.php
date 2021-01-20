<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisNnajsTable extends Migration
{
    private $tablaxxx = 'sis_nnajs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('prm_escomfam_id')->unsigned()->comment('SABER SI EL REGISTRO QUE ESTA CREANDO ES UN NNAJ O UN COMPONENTE FAMILIAR');
            $table->foreign('prm_escomfam_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DE LOS NNAJ REGISTRADOS EN EL SISTEMA.'");
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
