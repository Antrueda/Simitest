<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvfAreas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvf_areas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->comment('NOMBRE DEL AREA');
            $table->text('descripcion')->comment('DESCRIPCION DEL AREA');
            $table->integer('estusuario_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_pvf_areas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->comment('NOMBRE DEL AREA');
            $table->text('descripcion')->comment('DESCRIPCION DEL AREA');
            $table->integer('estusuario_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
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
        Schema::dropIfExists('pvf_areas');
        Schema::dropIfExists('h_pvf_areas');
    }
}
