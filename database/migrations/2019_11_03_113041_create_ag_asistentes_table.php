<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAgAsistentesTable extends Migration
{
    private $tablaxxx = 'ag_asistentes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ag_actividad_id')->unsigned()->comment('LLAVE FORANEA DE LA ACTIVIDAD');
            $table->integer('fi_dato_basico_id')->unsigned()->comment('LLAVE FORANEA DEL NNAJ');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('ag_actividad_id')->references('id')->on('ag_actividads');
            $table->foreign('fi_dato_basico_id')->references('id')->on('fi_datos_basicos');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA QUIENES ASISTEN A LAS ACTIVIDADES ASOCIADOS A LOS TALLERES DENTRO DE LAS ACCIONES GRUPALES'");
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
