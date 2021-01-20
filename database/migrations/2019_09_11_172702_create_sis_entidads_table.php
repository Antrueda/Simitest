<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisEntidadsTable extends Migration
{
    private $tablaxxx = 'sis_entidads';
    private $tablaxxx2 = 'sis_servicios';
    private $tablaxxx3 = 'sis_entidad_sis_servicio';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('nombre')->unique()->comment('CAMPO DE NOMBRE DE LA ENTIDAD');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS ENTIDADES REGISTRADAS EN EL SISTEMA.'");


        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('s_servicio')->unique()->comment('CAMPO DE NOMBRE DEL SERVICIO');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS SERVICIOS INSTITUCIONALES'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('sis_entidad_id')->unsigned()->comment('CAMPO DE ID DE LA ENTIDAD');
            $table->bigInteger('sis_servicio_id')->unsigned()->comment('CAMPO DE ID DEL SERVICIO');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            $table->unique(['sis_entidad_id', 'sis_servicio_id']);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LA RELACIÓN ENTRE ENTIDADES Y SERVICIOS INSTITUCIONALES'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}