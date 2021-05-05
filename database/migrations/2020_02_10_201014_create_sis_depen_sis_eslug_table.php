<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisDepenSisEslugTable extends Migration
{
    private $tablaxxx = 'sis_depen_sis_eslug';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_eslug_id')->unsigned()->comment('ID DE ESPACIO LUGAR');
            $table->integer('sis_depen_id')->unsigned()->comment('ID DE DEPENDENCIA O UPI');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('sis_eslug_id')->references('id')->on('sis_eslugs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->unique(['sis_depen_id', 'sis_eslug_id'],'sidese_un1');
            $table->timestamps();
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACION ENTRE DEPENDENCIAS DEL IDIPRON Y LOS ESPACIOS DONDE SON REALIZADAS ACTIVIDADES ORIENMTADAS A LOS BENEFICIARIOS DE LOS SERVICIOS INSTITUCIONALES'");
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
