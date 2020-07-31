<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDepenSisServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_depen_sis_servicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unique(['sis_depen_id','sis_servicio_id']);
            $table = CamposMagicos::getForeign($table, 'sis_depen');
            $table = CamposMagicos::getForeign($table, 'sis_servicio');
            $table = CamposMagicos::magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_depen_sis_servicio');
    }
}
