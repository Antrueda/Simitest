<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisActividadProcesosTable extends Migration
{
    private $tablaxxx = 'sis_actividad_procesos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('sis_actividad_id')->unsigned()->comment('CAMPO ID DE ACTIVIDAD');
            $table->bigInteger('sis_proceso_id')->unsigned()->comment('CAMPO DE ID DE PROCESO');
            $table->integer('tiempo')->comment('CAMPO DE Tiempo actualiza');//Tiempo actualiza
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('sis_actividad_id')->references('id')->on('sis_actividads');
            $table->foreign('sis_proceso_id')->references('id')->on('sis_procesos');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACIÓN ENTRE LAS ACTIVIDADES Y LOS PROCESOS DEL SISTEMA'");
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
