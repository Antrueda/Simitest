<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisEstasTable extends Migration
{
    private $tablaxxx = 'sis_estas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('LLAVE UNICA');;
            $table->string('s_estado')->comment('CAMPO DE TEXTO DEL NOMBRE DEL ESTADO');
            $table->Integer('i_estado')->comment('CAMPO DE NUMERICO DEL ESTADO');
            $table->Integer('user_crea_id')->comment('USUARIO QUE CREA EL REGISTRO');
            $table->Integer('user_edita_id')->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->timestamps();
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS ESTADOS DEL SISTEMA'");
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