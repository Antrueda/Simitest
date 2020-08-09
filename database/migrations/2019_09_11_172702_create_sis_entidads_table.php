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
        Schema::create('sis_entidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");


        Schema::create('sis_servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_servicio')->unique();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();

            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");


        Schema::create('sis_entidad_sis_servicio', function (Blueprint $table) {
            $table->bigInteger('sis_entidad_id')->unsigned();
            $table->bigInteger('sis_servicio_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            $table->unique(['sis_entidad_id', 'sis_servicio_id']);
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'P'");

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