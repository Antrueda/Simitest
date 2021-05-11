<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHSisEstasTable extends Migration
{
    private $tablaxxx = 'h_sis_estas';
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
            $table->integer('id_old');    // campo nuevo
            $table->integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->string('metodoxx');     // campo nuevo
            $table->string('rutaxxxx');     // campo nuevo
            $table->string('ipxxxxxx');     // campo nuevo
            $table->timestamps();
            $table->softDeletes();
        });
       ////DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
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
