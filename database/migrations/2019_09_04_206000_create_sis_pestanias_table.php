<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisPestaniasTable extends Migration
{
    private $tablaxxx = 'sis_pestanias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('s_pestania')->comment('CAMPO NOMBRE DE PESTAÑA');
            $table->bigInteger('sis_menu_id')->unsigned();
            $table->foreign('sis_menu_id')->references('id')->on('sis_menus');
            $table->timestamps();
        });
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
