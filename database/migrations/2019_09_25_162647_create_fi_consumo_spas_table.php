<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiConsumoSpasTable extends Migration
{
    private $tablaxxx = 'fi_consumo_spas';
    private $tablaxxx2 = 'fi_sustancia_consumidas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_consume_spa_id')->unsigned()->comment('CAMPO SI CONSUME SPA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID DE NNAJ');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_consume_spa_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE REGISTRA SI LA PERSONA ENTREVISTADA ACTUALMENTE CONSUME SPA, SECCION 11 CONSUMO SPA DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_consumo_spa_id')->unsigned()->comment('REGISTRO CONSUMO SPA AL QUE SE LE ASIGNA LA SUSTANCIA');
            $table->integer('i_prm_sustancia_id')->nullable()->unsigned()->comment('REGISTRO TIPO DE SUSTANCIA');
            $table->integer('i_edad_uso')->nullable()->unsigned()->comment('REGISTRO EDAD DE CUANDO INICIO A CONSUMIR');
            $table->integer('i_prm_consume_id')->nullable()->unsigned()->comment('REGISTRO SI CONTINUA CONSUMIENDO');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');//->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_sustancia_id')->references('id')->on('parametros');
            $table->foreign('fi_consumo_spa_id')->references('id')->on('fi_consumo_spas');
            $table->foreign('i_prm_consume_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE TIENE EL LISTADO DE LAS SUSTANCIAS SPA CONSUMIDAS POR LA PERSONA ENTREVISTADA, SECCION 11 CONSUMO SPA DE LA FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
