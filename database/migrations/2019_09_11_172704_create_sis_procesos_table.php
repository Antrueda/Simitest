<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisProcesosTable extends Migration
{
    private $tablaxxx = 'sis_procesos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_proceso_id')->unsigned()->nullable()->comment('CAMPO DE ID DE PROCESO');
            $table->integer('sis_mapa_proc_id')->unsigned()->comment('CAMPO DE ID MAPA DE PROCESO');
            $table->integer('prm_proceso_id')->unsigned()->comment('N');
            $table->string('nombre')->comment('CAMPO NOMBRE DEL PROCESO');
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('sis_proceso_id')->references('id')->on('sis_procesos');
            $table->foreign('sis_mapa_proc_id')->references('id')->on('sis_mapa_procs');
            $table->foreign('prm_proceso_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS PROCESOS DEL SISTEMA EN RELACIÓN CON EL MAPA DE PROCESOS.'");
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