<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAgResponsablesTable extends Migration
{
    private $tablaxxx = 'ag_responsables';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('i_prm_responsable_id')->unsigned();
            $table->bigInteger('ag_actividad_id')->unsigned();
            $table->bigInteger('sis_obse_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('ag_actividad_id')->references('id')->on('ag_actividads');
            $table->foreign('sis_obse_id')->references('id')->on('sis_obses');
            $table->foreign('i_prm_responsable_id')->references('id')->on('parametros');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');  
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACIÓN ENTRE LOS RESPONSABLES Y LAS ACTIVIDADES DENTRO DE LAS ACCIONES GRUPALES'");
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