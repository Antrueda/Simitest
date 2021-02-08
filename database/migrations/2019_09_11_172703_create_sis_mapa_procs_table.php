<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisMapaProcsTable extends Migration
{
    private $tablaxxx = 'sis_mapa_procs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('version')->unsigned()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('sis_entidad_id')->unsigned()->comment('CAMPO DE ID DE ENTIDAD');
            $table->date('vigencia')->comment('CAMPO FECHA DE VIGENCIA');
            $table->date('cierre')->comment('CAMPO DE FECHA DE CIERRE');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL MAPA DE PROCESOS DEL SISTEMA.'");
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