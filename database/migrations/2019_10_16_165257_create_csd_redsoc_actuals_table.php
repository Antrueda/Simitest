<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdRedsocActualsTable extends Migration
{
    private $tablaxxx = 'csd_redsoc_actuals';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned();
            $table->integer('prm_tipo_id')->unsigned();
            $table->string('nombre');
            $table->string('servicios', 120);
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
            $table->integer('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS REDES SOCIALES QUE ACTUALMENTE TIENE LA PERSONA ENTREVISTADA, PREGUNTA 11.2 REDES DE APOYO ACTUALES SECCION 11 REDES SOCIALES DE APOYO DE LA CONSULTA SOCIAL EN DOMICILIO'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}