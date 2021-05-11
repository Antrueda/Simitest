<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAreaUserTable extends Migration
{
    private $tablaxxx = 'area_user';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('area_id')->unsigned()->comment('ID DEL AREA');
            $table->integer('user_id')->unsigned()->comment('ID DE USUARIO QUE SE LE ASIGNA EL AREA');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');

            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->timestamps();
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACION ENTRE AREAS Y USUARIOS DEL SISTEMA'");
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
