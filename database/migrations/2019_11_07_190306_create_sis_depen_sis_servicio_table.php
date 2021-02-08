<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisDepenSisServicioTable extends Migration
{
    private $tablaxxx = 'sis_depeservs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->unique(['sis_depen_id', 'sis_servicio_id']);
            $table = CamposMagicos::getForeign($table, 'sis_depen');
            $table = CamposMagicos::getForeign($table, 'sis_servicio');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACIÓN ENTRE LAS DEPENDENCIAS Y LOS SERVICIOS QUE PROVEEN'");
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
