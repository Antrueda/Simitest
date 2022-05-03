<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvfActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvf_actividades', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->comment('NOMBRE DE LA ACTIVIDAD');
            $table->text('descripcion')->comment('DESCRIPCION DEL ACTIVIDAD');
            $table->integer('area_id')->comment('TIPO DE AREA');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table = CamposMagicos::magicos($table);

            $table->foreign('area_id')->references('id')->on('pvf_areas');
        });

        Schema::create('h_pvf_actividades', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->comment('NOMBRE DE LA ACTIVIDAD');
            $table->text('descripcion')->comment('DESCRIPCION DEL ACTIVIDAD');
            $table->integer('area_id')->comment('TIPO DE AREA');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
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
        Schema::dropIfExists('pvf_actividades');
        Schema::dropIfExists('h_pvf_actividades');
    }
}
