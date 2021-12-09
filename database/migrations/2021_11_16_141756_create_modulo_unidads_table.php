<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuloUnidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo_unidads', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('modulo_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('denomina_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('modulo_id')->references('id')->on('modulos');
            $table->foreign('denomina_id')->references('id')->on('denominas');

            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_modulo_unidads', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('modulo_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('denomina_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            
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
        Schema::dropIfExists('modulo_unidads');
        Schema::dropIfExists('h_modulo_unidads');
    }
}
