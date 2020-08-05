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
            $table->bigIncrements('id');
            $table->bigInteger('sis_proceso_id')->unsigned()->nullable();
            $table->bigInteger('sis_mapa_proc_id')->unsigned();
            $table->bigInteger('prm_proceso_id')->unsigned();
            $table->string('nombre');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('sis_proceso_id')->references('id')->on('sis_procesos');
            $table->foreign('sis_mapa_proc_id')->references('id')->on('sis_mapa_procs');
            $table->foreign('prm_proceso_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        ////DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS PROCESOS DEL SISTEMA EN RELACIÓN CON EL MAPA DE PROCESOS.'");
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