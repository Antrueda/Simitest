<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisDepenSisServicioTable extends Migration
{
    private $tablaxxx = 'sis_depen_sis_servicio';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unique(['sis_depen_id', 'sis_servicio_id']);
            $table = CamposMagicos::getForeign($table, 'sis_depen');
            $table = CamposMagicos::getForeign($table, 'sis_servicio');
            $table = CamposMagicos::magicos($table);
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS SERVICIOS BRINDADOS POR LAS DEPENDENCIAS REGISTRADAS EN EL SISTEMA.'");
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
