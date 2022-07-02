<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsecutAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consecut_asistencias', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('consecutivo')->comment('Consecutivo');
            $table->string("mesxxxxx",2)->comment('mes de registro del consecutivo');
            $table->string("anioxxxx",4)->comment('anio de registro del consecutivo');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->integer('sis_servicio_id')->unsigned()->comment('SERVICIO');
            $table->string("asis_planilla",30)->comment('anio de registro del consecutivo');
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
        Schema::dropIfExists('consecut_asistencias');
    }
}
